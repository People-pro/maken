<?php
    namespace app\models;

    use system\library\Models;
    use system\library\DB;
    use Carbon\Carbon;
    

    class SiteTrips extends Models
        {
            public function getPopularTrips()
            {
                $today = Carbon::now('+2:00');
                $data = DB::table('tb_trips')->where([['is_deleted', '=', false], ['date', '>', $today]])->orderBy('date', 'asc')->limit(4)->get();
                $num = 1;
                foreach ($data as $key => $value) {
                    $value->num = $num;
                    $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
                    // $value->price = json_encode($value->price);
                    $num++;
                }
                return $data;
            }
            public function getSiteTrips()
            {
                $today = Carbon::now('+2:00');
                $data = DB::table('tb_trips')->where([['is_deleted', '=', false], ['date', '>', $today]])->orderBy('date', 'asc')->get();
                $num = 1;
                foreach ($data as $key => $value) {
                    $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
                    $num++;
                }
                return $data;
            }
        };
        