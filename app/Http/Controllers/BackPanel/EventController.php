<?php

namespace App\Http\Controllers\BackPanel;

use App\Http\Controllers\Controller;
use App\Models\BackPanel\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
class EventController extends Controller
{
    public function index(Request $request)
    {
        $post = $request->all();
        $eventQuery = Event::query();

        if (!empty($post['search'])) {
            $eventQuery->where('title', 'like', '%' . $post['search'] . '%')
                ->orWhere('detail', 'like', '%' . $post['search'] . '%');
        }

        $event = $eventQuery->paginate(12);

        $data = [
            'event' => $event,
        ];
        return Inertia::render('BackPanel/Event/Event', $data);
    }

    public function form(Request $request)
    {
        $post = $request->all();
        $data = [];
        if (!empty($post['id'])) {
            $data['event'] = $post['id'] ? Event::findOrFail($post['id']) : null;
        }
        return Inertia::render('BackPanel/Event/Form', $data);
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
                'title.required' => "Please Enter Event Title",
                'detail.required' => "please Enter Event Detail",
                'image.mimes' => 'Event image must be a file of type: jpg, jpeg, png.',
                'image.max' => 'Event image must not exceed 512 KB.',
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
                $post['image'] = Storage::disk('public')->put('event', $request->image);
            }
            if (!Event::saveData($post)) {
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
            return to_route('admin.event.form')->with(['message' => $message, 'type' => $type]);
        }
        return to_route('admin.event')->with(['message' => $message, 'type' => $type]);
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


            $folder = storage_path('app/public/');
            $event = Event::where('id', $post['id'])->first();
            $imagePath = $event->image;
            if (!empty($imagePath)) {
                $filePath = $folder . $imagePath;
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            if (!Event::where('id', $post['id'])->delete()) {
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
        return to_route('admin.event')->with(['message' => $message, 'type' => $type]);
        // return back()->with('message',$message);
    }
}
