<?php

namespace app\models;

use system\library\Models;
use system\library\DB;
use Carbon\Carbon;

class AdminGallery extends Models
{
    public function getGallery()
    {
        $data = DB::table('tb_gallery')->where([['is_deleted', '=', false]])->orderBy('id', 'desc')->get();
        $num = 1;
        foreach ($data as $key => $value) {
            $value->num = $num;
            $num++;
        }
        return $data;
    }
    public function addGallery($title, $date, $image, $images)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_gallery')
            ->insert(
                [
                    'title' => $title,
                    'date' => $date,
                    'image' => $image,
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
    public function updateGallery($id, $title, $date, $image, $images)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_gallery')
            ->where('id', '=', $id)
            ->update(
                [
                    'title' => $title,
                    'date' => $date,
                    'image' => $image,
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
    public function deleteGallery($id)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_gallery')
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
