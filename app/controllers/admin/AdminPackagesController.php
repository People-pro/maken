<?php

namespace app\controllers\admin;

use system\library\Controller;
use app\models\AdminPackages;
use app\models\AdminAttractions;

class AdminPackagesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPackage()
    {
        $AdminPackages = new AdminPackages();
        $AdminAttractions = new AdminAttractions();
        $responce = [];
        $responce['packages'] = $AdminPackages->getPackage();
        $responce['attractions'] = $AdminAttractions->getAttraction();
        return responce(json_encode($responce), 200);
    }
    public function addPackage()
    {
        $attraction_id = input('attraction_id');
        $duration  = input('duration');
        $min_age = input('min_age');
        $max_people = input('max_people');
        $price = input('price');
        $inclusives = input('inclusives');
        $exclusives = input('exclusives');
        $reqs = input('reqs');
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
        $iterinary = input('iterinary');
        $AdminPackages = new AdminPackages();
        $addPackage = $AdminPackages->addPackage($attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image, $iterinary);
        if ($addPackage) {
            $responce['status'] = "ok";
            $responce['message'] = "Package was saved";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Package was not saved";
            return responce(json_encode($responce), 404);
        }
    }
    public function  updatePackage()
    {
        $id = input('id');
        $attraction_id = input('attraction_id');
        $duration  = input('duration');
        $min_age = input('min_age');
        $max_people = input('max_people');
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
        $iterinary = input('iterinary');
        $AdminPackages = new AdminPackages();
        $updatePackage = $AdminPackages->updatePackage($id, $attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image, $iterinary);
        if ($updatePackage) {
            $responce['status'] = "ok";
            $responce['message'] = "Package was updated";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Package was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function deletePackage($id)
    {
        $AdminPackages      = new AdminPackages();
        $deletePackage     = $AdminPackages->deletePackage($id);
        if ($deletePackage) {
            $responce['status'] = "ok";
            $responce['message'] = "Package was deleted";
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Package was not deleted";
            responce(json_encode($responce), 404);
        }
    }


    // package orders


    
    public function getOrders()
    {
        $id = input('id');
        $token = input('token');
        $AdminPackages = new AdminPackages();
        $AdminAttractions = new AdminAttractions();
        $responce = $AdminPackages->getOrders($id);
        return responce(json_encode($responce), 200);
    }
    public function confirmOrders()
    {
        $id = input('id');
        $token = input('token');
        $AdminPackages = new AdminPackages();
        $confirmOrders = $AdminPackages->confirmOrders($id);
        if ($confirmOrders) {
            $responce['status'] = "ok";
            $responce['message'] = "Order was confirmed";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Order was not confirmed";
            return responce(json_encode($responce), 404);
        }
    }
    public function deleteOrders($id)
    {
        $AdminPackages = new AdminPackages();
        $deleteOrders = $AdminPackages->deleteOrders($id);
        if ($deleteOrders) {
            $responce['status'] = "ok";
            $responce['message'] = "Order was deleted";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Order was not deleted";
            return responce(json_encode($responce), 404);
        }
    }
};
