<?php

namespace app\controllers\site;

use system\library\Controller;
use app\models\SiteTrips;
use app\models\AdminAttractions;

class SiteTripsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPopularTrips()
    {
        $SiteTrips = new SiteTrips();
        $AdminAttractions = new AdminAttractions();
        $responce = $SiteTrips->getPopularTrips();
        return responce(json_encode($responce), 200);
    }
    public function getSiteTrips()
    {
        $SiteTrips = new SiteTrips();
        $AdminAttractions = new AdminAttractions();
        $responce = $SiteTrips->getSiteTrips();
        return responce(json_encode($responce), 200);
    }
};
