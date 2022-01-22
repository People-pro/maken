<?php
    namespace app\models;

    use system\library\Models;
    use system\library\DB;
    use Carbon\Carbon;
    

    class AdminTrips extends Models
        {
            public function getTrip()
            {
                $data = DB::table('tb_trips')->where([['is_deleted', '=', false]])->orderBy('date', 'asc')->get();
                $num = 1;
                foreach ($data as $key => $value) {
                    $value->num = $num;
                    $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
                    $num++;
                }
                return $data;
            }
            public function addTrip($attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image, $date)
            {
                $today = Carbon::now('+2:00');
                if (DB::table('tb_trips')
                    ->insert(
                        [
                            'attraction_id' => $attraction_id,
                            'duration' => $duration,
                            'min_age' => $min_age,
                            'max_people' => $max_people,
                            'price' => $price,
                            'inclusives' => $inclusives,
                            'exclusives' => $exclusives,
                            'reqs' => $reqs,
                            'image' => $image,
                            'date' => $date,
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
            public function updateTrip($id, $attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image, $date)
            {
                $today = Carbon::now('+2:00');
                if (DB::table('tb_trips')
                    ->where('id', '=', $id)
                    ->update(
                        [
                            'attraction_id' => $attraction_id,
                            'duration' => $duration,
                            'min_age' => $min_age,
                            'max_people' => $max_people,
                            'price' => $price,
                            'inclusives' => $inclusives,
                            'exclusives' => $exclusives,
                            'reqs' => $reqs,
                            'image' => $image,
                            'date' => $date,
                            'updated_at' => $today,
                        ]
                    )
                ) {
                    return true;
                } else {
                    return false;
                }
            }
            public function deleteTrip($id)
            {
                $today = Carbon::now('+2:00');
                if (DB::table('tb_trips')
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
