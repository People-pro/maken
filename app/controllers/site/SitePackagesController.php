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
    public function bookPackage()
    {
        $package_id = input('package_id');
        $fullname  = input('fullname');
        $phone = input('phone');
        $email = input('email');
        $people = input('people');
        $nationality = input('nationality');
        $date = input('date');
        $details = input('details');
        $SitePackages = new SitePackages();
        $package = $SitePackages->getSinglePackages($package_id);
        $bookPackage = $SitePackages->bookPackage($package_id, $fullname, $phone, $email, $people, $nationality, $date, $details);
        if ($bookPackage) {

            // To send HTML mail
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $headers .= 'From: Maken Africa Safaris <info@makenafricasafaris.com>' . "\r\n";

            $message = "<h3><p>Dear " . $fullname . ",</p>";
            $message .= "<p>Thank you for booking a " . $package->duration . " " . $package->attraction->name . " package with Maken Africa Safaris.</p>";
            $message .= "<p>Our best team will be in touch with you shortly. Looking forward to stay in touch.</p></h3>";
            $message2 = "<h3><p>" . $fullname . " Booked" . $package->duration . " " . $package->attraction->name . " package with Maken Africa Safaris.</p></h3>";
            $mail = mail($email, "MAKEN PACKAGE ORDER", $message, $headers);
            $mail2 = mail('leonardremy3030@gmail.com', "MAKEN PACKAGE ORDER", $message2, $headers);
            $mail3 = mail('info@makenafricasafaris.com', "MAKEN PACKAGE ORDER", $message2, $headers);


            $responce['status'] = "ok";
            $responce['message'] = "You have successfully booked this package";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Package was not booked. Please Try again";
            return responce(json_encode($responce), 404);
        }
    }
};
