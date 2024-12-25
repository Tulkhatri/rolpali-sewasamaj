<?php

namespace App\Models\BackPanel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;

class OurTeam extends Model
{
    use HasFactory;


    public static function saveData($post)
    {
        try {

            $dataArray = [
                'name' => $post['name'],
                'designation' => $post['designation'],
                'facebook' => $post['facebook'],
                'detail' => $post['detail'],
                'slug' => Str::slug('ourteam'.'-'.time())
            ];
            if ($post['image']) {
                $dataArray['image'] = $post['image'];
            }
            if (!empty($post['id'])) {
                $dataArray['updated_at'] = Carbon::now();
                if (!OurTeam::where('id', $post['id'])->update($dataArray)) {
                    throw new Exception("Couldn't update records", 1);
                }
            } else {
                $dataArray['created_at'] = Carbon::now();
                if ((!OurTeam::insert($dataArray))) {
                    throw new Exception("Couldn't save records", 1);
                }
            }
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }
}

