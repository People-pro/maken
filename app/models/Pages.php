<?php

namespace app\models;

use system\library\Models;
use system\library\DB;
use Carbon\Carbon;

class Pages extends Models
{
    public function getDashboards($user, $id)
    {
        $today = Carbon::now('+2:00');
        $data = [];
        $data['trips'] = DB::table('tb_trips')->where('is_deleted', '=', false)->get()->count();
        $data['packages'] = DB::table('tb_packages')->where('is_deleted', '=', false)->get()->count();
        $data['users'] = DB::table('tb_users')->where('is_deleted', '=', false)->get()->count();
        $data['attractions'] = DB::table('tb_attractions')->where('is_deleted', '=', false)->get()->count();
        $data['albums'] = DB::table('tb_gallery')->where('is_deleted', '=', false)->get()->count();
        $data['orders'] = DB::table('tb_package_orders')->where('is_deleted', '=', false)->orderBy('id', 'desc')->limit(10)->get();
        $num = 1;
        foreach ($data['orders'] as $key => $value) {
            $value->package = DB::table('tb_packages')->where('id', '=', $value->package_id)->get()->first();
            $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->package->attraction_id)->get()->first();
            $value->num = $num;
            $num++;
        }
        return $data;
    }
    public function getAds()
    {
        $today = Carbon::now('+2:00');
        $data = DB::table('tb_ads')
            ->where('is_deleted', '=', false)
            ->limit(2)->get();
        $num = 1;
        foreach ($data as $key => $value) {
            $value->number = $num;
            $num++;
        }
        return $data;
    }
    public function updateAd($id, $image)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_ads')
            ->where('id', '=', $id)
            ->update(
                [
                    'image' => $image,
                    'updated_at' => $today,
                ]
            )
        ) {
            return true;
        } else {
            return true;
        }
    }
    public function getSubs()
    {
        $today = Carbon::now('+2:00');
        $data = DB::table('tb_subs')
            ->where('is_deleted', '=', false)
            ->get();
        $num = 1;
        foreach ($data as $key => $value) {
            $value->number = $num;
            $num++;
        }
        return $data;
    }
    public function subscribeNow($email)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_subs')
            ->insert(
                [
                    'email' => $email,
                    'created_at' => $today,
                    'updated_at' => $today,
                    'is_deleted' => false,
                ]
            )
        ) {
            return true;
        } else {
            return true;
        }
    }
    public function search($keyword)
    {
        $data = [];
        $data['accomodations'] = DB::table('tb_accomodations')->where([['is_deleted', '=', false], ['name', 'like', '%' . $keyword . '%']])->select('name', 'email', 'phone', 'image', 'stars', 'id', 'is_deleted')->orderBy('id', 'desc')->get();
        $data['clubs'] = DB::table('tb_clubs')->where([['is_deleted', '=', false], ['name', 'like', '%' . $keyword . '%']])->select('name', 'email', 'phone', 'image', 'likes', 'id', 'is_deleted')->orderBy('id', 'desc')->get();
        $data['shops'] = DB::table('tb_shops')->where([['is_deleted', '=', false], ['name', 'like', '%' . $keyword . '%']])->select('name', 'email', 'phone', 'image', 'id', 'is_deleted')->orderBy('id', 'desc')->get();
        $data['cars'] = DB::table('tb_cars')->where([['is_deleted', '=', false], ['model', 'like', '%' . $keyword . '%']])->select('model', 'email', 'image', 'id', 'price', 'is_deleted')->orderBy('id', 'desc')->get();
        $data['restaurants'] = DB::table('tb_restaurants')->where([['is_deleted', '=', false], ['name', 'like', '%' . $keyword . '%']])->select('name', 'email', 'phone', 'image', 'id', 'is_deleted')->orderBy('id', 'desc')->get();
        $data['sum'] = $data['accomodations']->count() + $data['clubs']->count() + $data['shops']->count() + $data['cars']->count() + $data['restaurants']->count();
        return $data;
    }
};
