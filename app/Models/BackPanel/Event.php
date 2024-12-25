<?php

namespace App\Models\BackPanel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;
class Event extends Model
{
    use HasFactory;


    public static function saveData($post)
    {
        try {

            $dataArray = [
                'title' => $post['title'],
                'detail' => $post['detail'],
                'address' => $post['address'],
                'event_date' => $post['eventDate'],
                'slug' => Str::slug('event'.'-'.time())
            ];
            if ($post['image']) {
                $dataArray['image'] = $post['image'];
            }
            if (!empty($post['id'])) {
                $dataArray['updated_at'] = Carbon::now();
                if (!Event::where('id', $post['id'])->update($dataArray)) {
                    throw new Exception("Couldn't update records", 1);
                }
            } else {
                $dataArray['created_at'] = Carbon::now();
                if ((!Event::insert($dataArray))) {
                    throw new Exception("Couldn't save records", 1);
                }
            }
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
