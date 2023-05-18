<?php

namespace app\models;

use system\library\Models;
use system\library\DB;
use Carbon\Carbon;

class AdminSlides extends Models
{
    public function getSlides()
    {
        $data = DB::table('tb_slides')->where([['is_deleted', '=', false]])->orderBy('id', 'desc')->get();
        $num = 1;
        foreach ($data as $key => $value) {
            $value->num = $num;
            $num++;
        }
        return $data;
    }
    public function addSlide($name, $image)
    {
        $today = Carbon::now('+2:00');
        if (
            DB::table('tb_slides')
                ->insert(
                    [
                        'name' => $name,
                        'image' => $image,
                        'created_at' => $today,
                        'updated_at' => $today,
                        'is_deleted' => false,
                    ]
                )
        ) {
            return true;
        } else {
            return false;
        }
    }
    public function updateSlide($id, $name, $image)
    {
        $today = Carbon::now('+2:00');
        if (
            DB::table('tb_slides')
                ->where('id', '=', $id)
                ->update(
                    [
                        'name' => $name,
                        'image' => $image,
                        'updated_at' => $today,
                    ]
                )
        ) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteSlide($id)
    {
        $today = Carbon::now('+2:00');
        if (
            DB::table('tb_slides')
                ->where('id', '=', $id)
                ->update(
                    [
                        'is_deleted' => true,
                        'deleted_at' => $today,
                    ]
                )
        ) {
            return true;
        } else {
            return false;
        }
    }
}
;