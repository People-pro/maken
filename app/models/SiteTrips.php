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
            public function getSingleTrips($id)
            {
                $today = Carbon::now('+2:00');
                $data = DB::table('tb_trips')->where([['is_deleted', '=', false], ['id', '=', $id]])->get()->first();
                $data->attraction = DB::table('tb_attractions')->where('id', '=', $data->attraction_id)->get()->first();
                $data->trips = DB::table('tb_trips')->where([['is_deleted', '=', false], ['id', '!=', $id], ['date', '>', $today]])->orderBy('id', 'desc')->limit(4)->get();
                $num = 1;
                foreach ($data->trips as $key => $value) {
                    $value->num = $num;
                    $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
                    $num++;
                }
                return $data;
            }
            public function bookTrip($trip_id, $fullname, $phone, $email, $people, $nationality, $details)
            {
                $today = Carbon::now('+2:00');
                if (DB::table('tb_trip_orders')
                    ->insert(
                        [
                            'trip_id' => $trip_id,
                            'fullname' => $fullname,
                            'phone' => $phone,
                            'email' => $email,
                            'people' => $people,
                            'nationality' => $nationality,
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
        