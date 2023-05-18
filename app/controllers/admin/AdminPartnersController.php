<?php

namespace app\controllers\admin;

use system\library\Controller;
use app\models\AdminPartners;
use app\models\SiteTrips;

class AdminPartnersController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPartners()
    {
        $AdminPartners = new AdminPartners();
        $responce = $AdminPartners->getPartners();
        return responce(json_encode($responce), 200);
    }
    public function addPartner()
    {
        $name = input('name');
        $link = input('link');
        $image = input('image');
        $AdminPartners = new AdminPartners();
        $addPartner = $AdminPartners->addPartner($name, $link, $image);
        if ($addPartner) {
            $responce['status'] = "ok";
            $responce['message'] = "Partner was saved";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Partner was not saved";
            return responce(json_encode($responce), 404);
        }
    }
    public function updatePartner()
    {
        $id = input('id');
        $name = input('name');
        $link = input('link');
        $image = input('image');
        $AdminPartners = new AdminPartners();
        $updatePartner = $AdminPartners->updatePartner($id, $name, $link, $image);
        if ($updatePartner) {
            $responce['status'] = "ok";
            $responce['message'] = "Partner was updated";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Partner was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function deletePartner($id)
    {
        $AdminPartners = new AdminPartners();
        $deletePartner = $AdminPartners->deletePartner($id);
        if ($deletePartner) {
            $responce['status'] = "ok";
            $responce['message'] = "Partner was deleted";
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Partner was not deleted";
            responce(json_encode($responce), 404);
        }
    }
}
;