<?php

namespace App\Models\FrontPanel;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public static function saveData($post)
    {
        try {
            $dataArray = [
                'name' => $post['name'],
                'phone' => $post['phone'] ?? '',
                'email' => $post['email'] ?? '',
                'address' => $post['address'] ?? '',
                'message' => $post['message'],
                'created_at' => Carbon::now(),
            ];
            if ((!Contact::insert($dataArray))) {
                throw new Exception("Couldn't save records", 1);
            }
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
