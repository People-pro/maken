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
    public function getSingleTrips($id)
    {
        $SiteTrips = new SiteTrips();
        $AdminAttractions = new AdminAttractions();
        $responce = $SiteTrips->getSingleTrips($id);
        return responce(json_encode($responce), 200);
    }
    public function bookTrip()
    {
        $trip_id = input('trip_id');
        $fullname  = input('fullname');
        $phone = input('phone');
        $email = input('email');
        $people = input('people');
        $nationality = input('nationality');
        $details = input('details');
        $SiteTrips = new SiteTrips();
        $trip = $SiteTrips->getSingleTrips($trip_id);
        $bookTrip = $SiteTrips->bookTrip($trip_id, $fullname, $phone, $email, $people, $nationality, $details);
        if ($bookTrip) {

            // To send HTML mail
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $headers .= 'From: Maken Africa Safaris <info@makenafricasafaris.com>' . "\r\n";

            $message = "<h3><p>Dear " . $fullname . ",</p>";
            $message .= "<p>Thank you for booking a " . $trip->duration . " " . $trip->attraction->name . " trip with Maken Africa Safaris.</p>";
            $message .= "<p>Our best team will be in touch with you shortly. Looking forward to stay in touch.</p></h3>";
            $message2 = "<h3><p>" . $fullname . " Booked" . $trip->duration . " " . $trip->attraction->name . " trip with Maken Africa Safaris.</p></h3>";
            $mail = mail($email, "MAKEN TRIP ORDER", $message, $headers);
            $mail2 = mail('leonardremy3030@gmail.com', "MAKEN TRIP ORDER", $message2, $headers);
            $mail3 = mail('info@makenafricasafaris.com', "MAKEN TRIP ORDER", $message2, $headers);


            $responce['status'] = "ok";
            $responce['message'] = "You have successfully booked this Trip";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Trip was not booked. Please Try again";
            return responce(json_encode($responce), 404);
        }
    }
};
