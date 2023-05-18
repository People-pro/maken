<?php

namespace app\controllers\admin;

use system\library\Controller;
use app\models\AdminSlides;
use app\models\SiteTrips;

class AdminSlidesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSlides()
    {
        $AdminSlides = new AdminSlides();
        $responce = $AdminSlides->getSlides();
        return responce(json_encode($responce), 200);
    }
    public function addSlide()
    {
        $name = input('name');
        $image = input('image');
        $AdminSlides = new AdminSlides();
        $addSlide = $AdminSlides->addSlide($name, $image);
        if ($addSlide) {
            $responce['status'] = "ok";
            $responce['message'] = "Slide was saved";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Slide was not saved";
            return responce(json_encode($responce), 404);
        }
    }
    public function updateSlide()
    {
        $id = input('id');
        $name = input('name');
        $image = input('image');
        $AdminSlides = new AdminSlides();
        $updateSlide = $AdminSlides->updateSlide($id, $name, $image);
        if ($updateSlide) {
            $responce['status'] = "ok";
            $responce['message'] = "Slide was updated";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Slide was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function deleteSlide($id)
    {
        $AdminSlides = new AdminSlides();
        $deleteSlide = $AdminSlides->deleteSlide($id);
        if ($deleteSlide) {
            $responce['status'] = "ok";
            $responce['message'] = "Slide was deleted";
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Slide was not deleted";
            responce(json_encode($responce), 404);
        }
    }
}
;