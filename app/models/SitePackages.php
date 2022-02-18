<?php

namespace app\models;

use system\library\Models;
use system\library\DB;
use Carbon\Carbon;


class SitePackages extends Models
{
    public function getPopularPackages()
    {
        $today = Carbon::now('+2:00');
        $data = [];
        $data['packages'] = DB::table('tb_packages')->where([['is_deleted', '=', false]])->orderBy('sales', 'desc')->limit(4)->get();
        $num = 1;
        foreach ($data['packages'] as $key => $value) {
            $value->num = $num;
            $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
            // $value->price = json_encode($value->price);
            $num++;
        }

        $data['trips'] = DB::table('tb_trips')->where([['is_deleted', '=', false], ['date', '>', $today]])->orderBy('date', 'asc')->limit(4)->get();
        $num = 1;
        foreach ($data['trips'] as $key => $value) {
            $value->num = $num;
            $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
            // $value->price = json_encode($value->price);
            $num++;
        }
        return $data;
    }
    public function getSitePackages()
    {
        $today = Carbon::now('+2:00');
        $data = [];
        $data['trips'] = DB::table('tb_trips')->where([['is_deleted', '=', false], ['date', '>', $today]])->orderBy('date', 'asc')->get();
        $data['packages'] = DB::table('tb_packages')->where([['is_deleted', '=', false]])->orderBy('id', 'desc')->get();
        $num = 1;
        foreach ($data['packages'] as $key => $value) {
            $value->num = $num;
            $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
            $num++;
        }
        foreach ($data['trips'] as $key => $value) {
            $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
            $num++;
        }
        return $data;
    }
    public function getSinglePackages($id)
    {
        $today = Carbon::now('+2:00');
        $data = DB::table('tb_packages')->where([['is_deleted', '=', false], ['id', '=', $id]])->get()->first();
        $data->attraction = DB::table('tb_attractions')->where('id', '=', $data->attraction_id)->get()->first();
        $data->packages = DB::table('tb_packages')->where([['is_deleted', '=', false], ['id', '!=', $id], ['attraction_id', '=', $data->attraction_id]])->orderBy('id', 'desc')->limit(4)->get();
        $num = 1;
        foreach ($data->packages as $key => $value) {
            $value->num = $num;
            $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
            $num++;
        }
        return $data;
    }
    public function bookPackage($package_id, $fullname, $phone, $email, $people, $nationality, $date, $details)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_package_orders')
            ->insert(
                [
                    'package_id' => $package_id,
                    'fullname' => $fullname,
                    'phone' => $phone,
                    'email' => $email,
                    'people' => $people,
                    'nationality' => $nationality,
                    'date' => $date,
                    'details' => $details,
                    'status' => 'pending',
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
};
