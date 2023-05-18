<?php

namespace app\models;

use system\library\Models;
use system\library\DB;
use Carbon\Carbon;

class AdminPartners extends Models
{
    public function getPartners()
    {
        $data = DB::table('tb_partners')->where([['is_deleted', '=', false]])->orderBy('id', 'desc')->get();
        $num = 1;
        foreach ($data as $key => $value) {
            $value->num = $num;
            $num++;
        }
        return $data;
    }
    public function addPartner($name, $link, $image)
    {
        $today = Carbon::now('+2:00');
        if (
            DB::table('tb_partners')
                ->insert(
                    [
                        'name' => $name,
                        'link' => $link,
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
    public function updatePartner($id, $name, $link, $image)
    {
        $today = Carbon::now('+2:00');
        if (
            DB::table('tb_partners')
                ->where('id', '=', $id)
                ->update(
                    [
                        'name' => $name,
                        'link' => $link,
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
    public function deletePartner($id)
    {
        $today = Carbon::now('+2:00');
        if (
            DB::table('tb_partners')
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