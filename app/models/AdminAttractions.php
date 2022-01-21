<?php

namespace app\models;

use system\library\Models;
use system\library\DB;
use Carbon\Carbon;

class AdminAttractions extends Models
{
    public function getAttraction()
    {
        $data = DB::table('tb_attractions')->where([['is_deleted', '=', false]])->orderBy('id', 'desc')->get();
        $num = 1;
        foreach ($data as $key => $value) {
            $value->num = $num;
            $num++;
        }
        return $data;
    }
    public function addAttraction($name, $country, $region, $images)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_attractions')
            ->insert(
                [
                    'name' => $name,
                    'country' => $country,
                    'region' => $region,
                    'images' => $images,
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
    public function updateAttraction($id, $name, $country, $region, $images)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_attractions')
            ->where('id', '=', $id)
            ->update(
                [
                    'name' => $name,
                    'country' => $country,
                    'region' => $region,
                    'images' => $images,
                    'updated_at' => $today,
                ]
            )
        ) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteAttraction($id)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_attractions')
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
};
