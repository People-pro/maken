<?php

namespace app\controllers\admin;

use system\library\Controller;
use app\models\AdminAttractions;

class AdminAttractionsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAttraction()
    {
        $AdminAttractions = new AdminAttractions();
        $responce = $AdminAttractions->getAttraction();
        return responce(json_encode($responce), 200);
    }
    public function addAttraction()
    {
        $name = input('name');
        $country  = input('country');
        $region = input('region');
        $images = input('images');
        $AdminAttractions = new AdminAttractions();
        $addAttraction = $AdminAttractions->addAttraction($name, $country, $region, $images);
        if ($addAttraction) {
            $responce['status'] = "ok";
            $responce['message'] = "Attraction was saved";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Attraction was not saved";
            return responce(json_encode($responce), 404);
        }
    }
    public function  updateAttraction()
    {
        $id = input('id');
        $name = input('name');
        $country  = input('country');
        $region = input('region');
        $images = input('images');
        $AdminAttractions = new AdminAttractions();
        $updateAttraction = $AdminAttractions->updateAttraction($id, $name, $country, $region, $images);
        if ($updateAttraction) {
            $responce['status'] = "ok";
            $responce['message'] = "Attraction was updated";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Attraction was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function deleteAttraction($id)
    {
        $AdminAttractions      = new AdminAttractions();
        $deleteAttraction     = $AdminAttractions->deleteAttraction($id);
        if ($deleteAttraction) {
            $responce['status'] = "ok";
            $responce['message'] = "Attraction was deleted";
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Attraction was not deleted";
            responce(json_encode($responce), 404);
        }
    }
};
