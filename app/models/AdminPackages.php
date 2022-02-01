<?php
    namespace app\models;

    use system\library\Models;
    use system\library\DB;
    use Carbon\Carbon;
    

    class AdminPackages extends Models
        {
            public function getPackage()
            {
                $data = DB::table('tb_packages')->where([['is_deleted', '=', false]])->orderBy('id', 'desc')->get();
                $num = 1;
                foreach ($data as $key => $value) {
                    $value->num = $num;
                    $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->attraction_id)->get()->first();
                    $num++;
                }
                return $data;
            }
            public function addPackage($attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image)
            {
                $today = Carbon::now('+2:00');
                if (DB::table('tb_packages')
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
            public function updatePackage($id, $attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image)
            {
                $today = Carbon::now('+2:00');
                if (DB::table('tb_packages')
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
                            'updated_at' => $today,
                        ]
                    )
                ) {
                    return true;
                } else {
                    return false;
                }
            }
            public function deletePackage($id)
            {
                $today = Carbon::now('+2:00');
                if (DB::table('tb_packages')
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


            // package orders


            
            public function getOrders($id)
            {
                $data = DB::table('tb_package_orders')->where([['is_deleted', '=', false], ['package_id', '=', $id]])->orderBy('id', 'desc')->get();
                $num = 1;
                foreach ($data as $key => $value) {
                    $value->num = $num;
                    $value->package = DB::table('tb_packages')->where('id', '=', $value->package_id)->get()->first();
                    $value->attraction = DB::table('tb_attractions')->where('id', '=', $value->package->attraction_id)->get()->first();
                    $num++;
                }
                return $data;
            }
            public function confirmOrders($id)
            {
                $today = Carbon::now('+2:00');
                if (DB::table('tb_package_orders')
                    ->where('id', '=', $id)
                    ->update(
                        [
                            'status' => 'confirmed',
                            'updated_at' => $today,
                        ]
                    )
                ) {
                    return true;
                } else {
                    return false;
                }
            }
        };
