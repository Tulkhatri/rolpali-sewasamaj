<?php

namespace App\Http\Controllers\FrontPanel;

use App\Http\Controllers\Controller;
use App\Models\FrontPanel\Contact;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $post = $request->all();
        $contactQuery = Contact::query();

        if (!empty($post['search'])) {
            $contactQuery->where('name', 'like', '%' . $post['search'] . '%')
                ->orWhere('phone', 'like', '%' . $post['search'] . '%');
        }

        $contact = $contactQuery->paginate(12);

        $data = [
            'contact' => $contact,
        ];
        return Inertia::render('BackPanel/Contact/Contact', $data);
    }
    public function save(Request $request)
    {
            sleep(1);

            $post= $request->validate([
                'name' => ['required','max:255'],
                'phone' => ['nullable','max:30'],
                'email' => ['nullable','max:30'],
                'address' => ['nullable','max:100'],
                'message' => ['required','max:1000'],
            ]);

            $type = "Success";
            $message = "धन्यवाद ! तपाईको सन्देश प्राप्त भएको छ ";

            if (!Contact::saveData($post)) {
                throw new Exception("Could sent message", 1);
            }
        return back()->with(['message' => $message, 'type' => $type]);
    }

    public function delete(Request $request)
    {
        try {
            sleep(1);
            $post = $request->all();

            $type = "Success";
            $message = "Record delete Succefully";

            DB::beginTransaction();
            if (!Contact::where('id', $post['id'])->delete()) {
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
        return to_route('admin.contact')->with(['message' => $message, 'type' => $type]);
        // return back()->with('message',$message);
    }
}
