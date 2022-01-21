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
        $AdminPackages = new AdminPackages();
        $addPackage = $AdminPackages->addPackage($attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image);
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
        $AdminPackages = new AdminPackages();
        $updatePackage = $AdminPackages->updatePackage($id, $attraction_id, $duration, $min_age, $max_people, $price, $inclusives, $exclusives, $reqs, $image);
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
};