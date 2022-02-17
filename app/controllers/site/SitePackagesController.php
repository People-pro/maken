<?php

namespace app\controllers\site;

use system\library\Controller;
use app\models\SitePackages;
use app\models\AdminAttractions;

class SitePackagesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPopularPackages()
    {
        $SitePackages = new SitePackages();
        $AdminAttractions = new AdminAttractions();
        $responce = $SitePackages->getPopularPackages();
        return responce(json_encode($responce), 200);
    }
    public function getSitePackages()
    {
        $SitePackages = new SitePackages();
        $AdminAttractions = new AdminAttractions();
        $responce = $SitePackages->getSitePackages();
        return responce(json_encode($responce), 200);
    }
    public function getSinglePackages($id)
    {
        $SitePackages = new SitePackages();
        $AdminAttractions = new AdminAttractions();
        $responce = $SitePackages->getSinglePackages($id);
        return responce(json_encode($responce), 200);
    }
};
