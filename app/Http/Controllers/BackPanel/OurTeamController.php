<?php

namespace App\Http\Controllers\BackPanel;

use App\Http\Controllers\Controller;
use App\Models\BackPanel\OurTeam;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class OurTeamController extends Controller
{
    public function index(Request $request)
    {
        $post = $request->all();
        $ourTeamQuery = OurTeam::query();

        if (!empty($post['search'])) {
            $ourTeamQuery->where('name', 'like', '%' . $post['search'] . '%')
                ->orWhere('detail', 'like', '%' . $post['search'] . '%');
        }

        $ourteam = $ourTeamQuery->paginate(12);

        $data = [
            'ourteam' => $ourteam,
        ];
        return Inertia::render('BackPanel/OurTeam/OurTeam', $data);
    }

    public function form(Request $request)
    {
        $post = $request->all();
        $data = [];
        if (!empty($post['id'])) {
            $data['ourteam'] = $post['id'] ? OurTeam::findOrFail($post['id']) : null;
        }
        return Inertia::render('BackPanel/OurTeam/Form', $data);
    }

    public function save(Request $request)
    {
        try {
            sleep(1);
            $post = $request->all();
            $rules = [
                'title' => 'required',
                'detail' => 'required',
                'image' => 'nullable|mimes:jpg,jpeg,png|max:512',
            ];

            $message = [
                'title.required' => "Please Enter Donation Title",
                'detail.required' => "please Enter Donation Detail",
                'image.mimes' => 'The introduction image must be a file of type: jpg, jpeg, png.',
                'image.max' => 'The introduction image must not exceed 512 KB.',
            ];

            $validate = Validator::make($post, $rules, $message);
            if ($validate->fails()) {
                throw new Exception($validate->errors()->first(), 1);
            }

            // $post= $request->validate([
            //     'title' => ['required','max:255'],
            //     'detail' => 'required',
            // ]);

            $type = "Success";
            $message = "Record Saved Succefully";

            DB::beginTransaction();

            if ($request->hasFile('image')) {
                $post['image'] = Storage::disk('public')->put('ourteam', $request->image);
            }
            if (!OurTeam::saveData($post)) {
                throw new Exception("Could not Save Record", 1);
            }

            DB::commit();
        } catch (QueryException) {
            DB::rollBack();
            $type = "error";
            $message = $this->queryMessage();
        } catch (Exception $e) {
            DB::rollBack();
            $type = "error";
            $message = $e->getMessage();
        }
        if ($type === "error") {
            return to_route('admin.ourteam.form')->with(['message' => $message, 'type' => $type]);
        }
        return to_route('admin.ourteam')->with(['message' => $message, 'type' => $type]);
        // return back()->with('message',$message);
    }

    public function delete(Request $request)
    {
        try {
            sleep(1);
            $post = $request->all();

            $type = "Success";
            $message = "Record delete Succefully";

            DB::beginTransaction();
            if (!OurTeam::where('id', $post['id'])->delete()) {
                throw new Exception("Could not delete record", 1);
            }

            DB::commit();
        } catch (QueryException) {
            DB::rollBack();
            $type = "error";
            $message = $this->queryMessage();
        } catch (Exception $e) {
            DB::rollBack();
            $type = "error";
            $message = $e->getMessage();
        }
        return to_route('admin.ourteam')->with(['message' => $message, 'type' => $type]);
        // return back()->with('message',$message);
    }
}
