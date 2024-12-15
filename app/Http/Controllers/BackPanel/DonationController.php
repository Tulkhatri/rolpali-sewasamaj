<?php

namespace App\Http\Controllers\BackPanel;

use App\Http\Controllers\Controller;
use App\Models\BackPanel\Donation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class DonationController extends Controller
{
    public function index(Request $request)
    {
        $post = $request->all();
        $donationQuery = Donation::query();

        if (!empty($post['search'])) {
            $donationQuery->where('title', 'like', '%' . $post['search'] . '%')
                ->orWhere('detail', 'like', '%' . $post['search'] . '%');
        }

        $donation = $donationQuery->paginate(12);

        $data = [
            'donation' => $donation,
        ];
        return Inertia::render('BackPanel/Donation/Donation', $data);
    }

    public function form(Request $request)
    {
        $post = $request->all();
        $data = [];
        if (!empty($post['id'])) {
            $data['donation'] = $post['id'] ? Donation::findOrFail($post['id']) : null;
        }
        return Inertia::render('BackPanel/Donation/Form', $data);
    }

    public function save(Request $request)
    {
        try {
            sleep(1);
            $post = $request->all();
            $rules = [
                'title' => 'required',
                'detail' => 'required',
                'image' => ['file', 'nullable', 'max:2024'],
            ];

            $message = [
                'title.required' => "Please Enter Donation Title",
                'detail.required' => "please Enter Donation Detail",
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
                $post['image'] = Storage::disk('public')->put('donation', $request->image);
            }
            if (!Donation::saveData($post)) {
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
            return to_route('admin.donation.form')->with(['message' => $message, 'type' => $type]);
        }
        return to_route('admin.donation')->with(['message' => $message, 'type' => $type]);
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
            if (!Donation::where('id', $post['id'])->delete()) {
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
        return to_route('admin.donation')->with(['message' => $message, 'type' => $type]);
        // return back()->with('message',$message);
    }
}
