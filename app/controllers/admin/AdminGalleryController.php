<?php

namespace app\controllers\admin;

use system\library\Controller;
use app\models\AdminGallery;
use app\models\SiteTrips;

class AdminGalleryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getGallery()
    {
        $AdminGallery = new AdminGallery();
        $responce = $AdminGallery->getGallery();
        return responce(json_encode($responce), 200);
    }
    public function getSingleGallery($id)
    {
        $AdminGallery = new AdminGallery();
        $SiteTrips = new SiteTrips();
        $responce = [];
        $responce['album'] = $AdminGallery->getSingleGallery($id);
        $responce['trips'] = $SiteTrips->getPopularTrips();
        return responce(json_encode($responce), 200);
    }
    public function addGallery()
    {
        $title = input('title');
        $date  = input('date');
        $image = input('image');
        $images = input('images');
        $AdminGallery = new AdminGallery();
        $addGallery = $AdminGallery->addGallery($title, $date, $image, $images);
        if ($addGallery) {
            $responce['status'] = "ok";
            $responce['message'] = "Gallery was saved";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Gallery was not saved";
            return responce(json_encode($responce), 404);
        }
    }
    public function  updateGallery()
    {
        $id = input('id');
        $title = input('title');
        $date  = input('date');
        $image = input('image');
        $images = input('images');
        $AdminGallery = new AdminGallery();
        $updateGallery = $AdminGallery->updateGallery($id, $title, $date, $image, $images);
        if ($updateGallery) {
            $responce['status'] = "ok";
            $responce['message'] = "Gallery was updated";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Gallery was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function deleteGallery($id)
    {
        $AdminGallery      = new AdminGallery();
        $deleteGallery     = $AdminGallery->deleteGallery($id);
        if ($deleteGallery) {
            $responce['status'] = "ok";
            $responce['message'] = "Gallery was deleted";
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Gallery was not deleted";
            responce(json_encode($responce), 404);
        }
    }
};
