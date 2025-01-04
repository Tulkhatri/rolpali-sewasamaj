<?php

namespace App\Models\BackPanel;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
class Aboutus extends Model
{
    use HasFactory;

    public static function updateData($post)
    {
        try {

            $dataArray = [
                'aboutus_title' => $post['aboutus_title'],
                'aboutus_detail' => $post['aboutus_detail'],
                'chairman_message' => $post['chairman_message'],
                'vision_title' => $post['vision_title'],
                'vision_detail' => $post['vision_detail'],
                'mission_short_quote' => $post['mission_short_quote'],
                'mission1_title' => $post['mission1_title'],
                'mission1_detail' => $post['mission1_detail'],
                'mission2_title' => $post['mission2_title'],
                'mission2_detail' => $post['mission2_detail'],
                'mission3_title' => $post['mission3_title'],
                'mission3_detail' => $post['mission3_detail'],
            ];

            if ($post['aboutus_image']) {
                $dataArray['aboutus_image'] = $post['aboutus_image'];
            }
            if ($post['chairman_image']) {
                $dataArray ['chairman_image'] = $post['chairman_image'];
            }
            if ($post['vision_image']) {
                $dataArray['vision_image'] = $post['vision_image'];
            }
            if ($post['mission1_image']) {
                $dataArray['mission1_image'] = $post['mission1_image'];
            }
            if ($post['mission2_image']) {
                $dataArray['mission2_image'] = $post['mission2_image'];
            }
            if ($post['mission3_image']) {
                $dataArray[ 'mission3_image'] = $post['mission3_image'];
            }
            $dataArray['updated_at'] = Carbon::now();
            if (!Aboutus::where('id', 1)->update($dataArray)) {
                throw new Exception("Couldn't update records", 1);
            }
           
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
