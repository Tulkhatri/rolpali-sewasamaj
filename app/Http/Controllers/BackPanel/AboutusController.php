<?php

namespace App\Http\Controllers\BackPanel;

use App\Http\Controllers\Controller;
use App\Models\BackPanel\Aboutus;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AboutusController extends Controller
{
    public function index()
    {
        return Inertia::render('BackPanel/Aboutus/Aboutus', ['aboutus' => Aboutus::first()]);
    }
    public function updateAboutus(Request $request)
    {
        try {
            sleep(1);
            $post = $request->all();
            //    $rules = [
            //        'title' => 'required',
            //        'detail' => 'required',
            //        'image' => ['file', 'nullable', 'max:2024'],
            //    ];

            //    $message = [
            //        'title.required' => "Please Enter Donation Title",
            //        'detail.required' => "please Enter Donation Detail",
            //    ];

            //    $validate = Validator::make($post, $rules, $message);
            //    if ($validate->fails()) {
            //        throw new Exception($validate->errors()->first(), 1);
            //    }


            $type = "Success";
            $message = "Record Saved Succefully";

            DB::beginTransaction();

            if ($request->hasFile('aboutus_image')) {
                $post['aboutus_image'] = Storage::disk('public')->put('aboutus', $request->aboutus_image);
            }
            if ($request->hasFile('chairman_image')) {
                $post['chairman_image'] = Storage::disk('public')->put('aboutus', $request->chairman_image);
            }
            if ($request->hasFile('vision_image')) {
                $post['vision_image'] = Storage::disk('public')->put('aboutus', $request->vision_image);
            }
            if ($request->hasFile('mission1_image')) {
                $post['mission1_image'] = Storage::disk('public')->put('aboutus', $request->mission1_image);
            }
            if ($request->hasFile('mission2_image')) {
                $post['mission2_image'] = Storage::disk('public')->put('aboutus', $request->mission2_image);
            }
            if ($request->hasFile('mission3_image')) {
                $post['mission3_image'] = Storage::disk('public')->put('aboutus', $request->mission3_image);
            }
            if (!Aboutus::updateData($post)) {
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

        return to_route('admin.aboutus')->with(['message' => $message, 'type' => $type]);
        // return back()->with('message',$message);
    }
}
