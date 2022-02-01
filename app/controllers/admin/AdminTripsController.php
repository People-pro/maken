<?php

namespace app\controllers\admin;

use system\library\Controller;
use app\models\AdminTrips;
use app\models\AdminAttractions;

class AdminTripsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTrip()
    {
        $AdminTrips = new AdminTrips();
        $AdminAttractions = new AdminAttractions();
        $responce = [];
        $responce['trips'] = $AdminTrips->getTrip();
        $responce['attractions'] = $AdminAttractions->getAttraction();
        return responce(json_encode($responce), 200);
    }
    public function addTrip()
    {
        $attraction_id = input('attraction_id');
        $duration  = input('duration');
        $min_age = input('min_age');
        $max_people = input('max_people');
        $price = input('price');
        $inclusives = input('inclusives');
        $exclusives = input('exclusives');
        $reqs = input('reqs');
        $date = input('date');
        // if ($price && $price != '') {
        //     $price = '[]';
        // }
        // if ($inclusives && $inclusives != '') {
        //     $inclusives = '[]';
        // }
        // if ($exclusives && $exclusives != '') {
        //     $exclusives = '[]';
        // }
        // if ($reqs && $reqs != '') {
        //     $reqs = '[]';
        // }

        $image = input('image');
        $AdminTrips = new AdminTrips();
        $addTrip = $AdminTrips->addTrip($attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image, $date);
        if ($addTrip) {
            $responce['status'] = "ok";
            $responce['message'] = "Trip was saved";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Trip was not saved";
            return responce(json_encode($responce), 404);
        }
    }
    public function  updateTrip()
    {
        $id = input('id');
        $attraction_id = input('attraction_id');
        $duration  = input('duration');
        $min_age = input('min_age');
        $max_people = input('max_people');
        $date = input('date');
        $price = input('price');
        $inclusives = input('inclusives');
        $exclusives = input('exclusives');
        $reqs = input('reqs');
        if (!$price && $price == '[]') {
            $price = '[]';
        }
        if (!$inclusives && $inclusives == '[]') {
            $inclusives = '[]';
        }
        if (!$exclusives && $exclusives == '[]') {
            $exclusives = '[]';
        }
        if (!$reqs && $reqs == '[]') {
            $reqs = '[]';
        }
        $image = input('image');
        $AdminTrips = new AdminTrips();
        $updateTrip = $AdminTrips->updateTrip($id, $attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image, $date);
        if ($updateTrip) {
            $responce['status'] = "ok";
            $responce['message'] = "Trip was updated";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Trip was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function deleteTrip($id)
    {
        $AdminTrips      = new AdminTrips();
        $deleteTrip     = $AdminTrips->deleteTrip($id);
        if ($deleteTrip) {
            $responce['status'] = "ok";
            $responce['message'] = "Trip was deleted";
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Trip was not deleted";
            responce(json_encode($responce), 404);
        }
    }


    // package orders


    
    public function getOrders()
    {
        $id = input('id');
        $token = input('token');
        $AdminTrips = new AdminTrips();
        $AdminAttractions = new AdminAttractions();
        $responce = $AdminTrips->getOrders($id);
        return responce(json_encode($responce), 200);
    }
};
