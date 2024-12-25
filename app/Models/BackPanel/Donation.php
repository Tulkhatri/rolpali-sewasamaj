<?php

namespace App\Models\BackPanel;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Donation extends Model
{
    use HasFactory;


    public static function saveData($post)
    {
        try {

            $dataArray = [
                'title' => $post['title'],
                'detail' => $post['detail'],
                'slug' => Str::slug('donation'.'-'.time())
            ];
            if ($post['image']) {
                $dataArray['image'] = $post['image'];
            }
            if (!empty($post['id'])) {
                $dataArray['updated_at'] = Carbon::now();
                if (!Donation::where('id', $post['id'])->update($dataArray)) {
                    throw new Exception("Couldn't update records", 1);
                }
            } else {
                $dataArray['created_at'] = Carbon::now();
                if ((!Donation::insert($dataArray))) {
                    throw new Exception("Couldn't save records", 1);
                }
            }
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
