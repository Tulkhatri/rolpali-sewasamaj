<?php

namespace App\Http\Controllers\BackPanel;

use App\Http\Controllers\Controller;
use App\Models\BackPanel\Branch;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
class BranchController extends Controller
{
    public function index(Request $request)
    {
        $post = $request->all();
        $branchQuery = Branch::query()->orderby('order','asc');

        if (!empty($post['search'])) {
            $branchQuery->where('branchname', 'like', '%' . $post['search'] . '%');
        }

        $branch = $branchQuery->paginate(12);

        $data = [
            'branch' => $branch,
        ];
        return Inertia::render('BackPanel/Branch/Branch', $data);
    }

    public function form(Request $request)
    {
        $post = $request->all();
        $data = [];
        if (!empty($post['id'])) {
            $data['branch'] = $post['id'] ? Branch::findOrFail($post['id']) : null;
        }
        return Inertia::render('BackPanel/Branch/Form', $data);
    }

    public function save(Request $request)
    {
        try {
            sleep(1);
            $post = $request->all();
            $rules = [
                'branchname' => 'required',
            ];

            $message = [
                'branchname.required' => "Please Enter Branch",
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
            if (!Branch::saveData($post)) {
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
            return to_route('admin.branch.form')->with(['message' => $message, 'type' => $type]);
        }
        return to_route('admin.branch')->with(['message' => $message, 'type' => $type]);
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

            if (!Branch::where('id', $post['id'])->delete()) {
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
        return to_route('admin.branch')->with(['message' => $message, 'type' => $type]);
        // return back()->with('message',$message);
    }
}
