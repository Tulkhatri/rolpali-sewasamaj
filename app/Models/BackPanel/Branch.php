<?php

namespace App\Models\BackPanel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Exception;
class Branch extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->hasMany(OurTeam::class, 'branchid', 'id');
    }

    public static function saveData($post)
    {
        try {

            $dataArray = [
                'branchname' => $post['branchname'],
                'order' => $post['order'],
            ];
            if (!empty($post['id'])) {
                $dataArray['updated_at'] = Carbon::now();
                if (!Branch::where('id', $post['id'])->update($dataArray)) {
                    throw new Exception("Couldn't update records", 1);
                }
            } else {
                $dataArray['created_at'] = Carbon::now();
                if ((!Branch::insert($dataArray))) {
                    throw new Exception("Couldn't save records", 1);
                }
            }
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
