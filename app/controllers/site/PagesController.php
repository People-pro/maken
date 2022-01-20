<?php

namespace app\controllers\site;

use system\library\Controller;
use app\models\Pages;
use app\models\adminUser;

class PagesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array('name' => "Welcome to Page");
        return $this->render("site", "Pages/notFound.twig", $data);
    }
    public function getDashboards()
    {
        $adminUser = new adminUser();
        $token = input('token');
        $user = $adminUser->getUserByToken($token);

        $Pages = new Pages();
        $responce = $Pages->getDashboards($user->type, $user->id);
        return responce(json_encode($responce), 200);
    }
    public function contactNow()
    {
        $Firstname = input('Firstname');
        $Lastname = input('Lastname');
        $email = input('email');
        $message = input('message');
        $subject = input('subject');

        // the email where the message is sent
        $to = "checkintours21@gmail.com, leonardremy3030@gmail.com";
        // The email subject
        $subject = $subject;
        // The message to be sent
        $txt = "Firstnames: " . $Firstname . " " . $Lastname . "\n" .
            "Email: " . $email . "\n" .
            "Message: " . $message;
        // Email headers
        $headers = "From: " . $email;
        if (mail($to, $subject, $txt, $headers)) {
            $data['status'] = 'ok';
            $data['message'] = 'Your message was sent';
            echo responce(json_encode($data), 202);
        } else {
            $data['status'] = 'bad';
            $data['message'] = 'Your message was not sent';
            echo responce(json_encode($data), 202);
        }
    }
    public function getSubs()
    {
        $Pages = new Pages();
        $responce = $Pages->getSubs();
        return responce(json_encode($responce), 200);
    }
    public function subscribeNow()
    {
        $email = input('email');

        // the email where the message is sent
        $to = "checkintours21@gmail.com, leonardremy3030@gmail.com";
        // The email subject
        $subject = "Checkintours Subscription";
        // The message to be sent
        $txt = "Email: " . $email . " has subscribed to Checkintours newsletters \n";
        // Email headers
        $headers = "From: " . $email;
        $Pages = new Pages();
        $subscribeNow = $Pages->subscribeNow($email);
        if ($subscribeNow) {
            if (mail($to, $subject, $txt, $headers)) {
                $data['status'] = 'ok';
                $data['message'] = 'Thank you for subscribing';
                echo responce(json_encode($data), 202);
            } else {
                $data['status'] = 'bad';
                $data['message'] = 'Sorry something went wrong';
                echo responce(json_encode($data), 202);
            }
        } else {
            $data['status'] = 'bad';
            $data['message'] = 'Sorry something went wrong';
            echo responce(json_encode($data), 202);
        }
    }
    public function getAds()
    {
        $Pages = new Pages();
        $responce = $Pages->getAds();
        return responce(json_encode($responce), 200);
    }
    public function updateAd()
    {
        $id = input('id');
        $image = input('image');
        $Pages = new Pages();
        $updateAd = $Pages->updateAd($id, $image);
        if ($updateAd) {
            $responce['status'] = "ok";
            $responce['message'] = "Ad was updated";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Ad was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function search($keyword)
    {
        $Pages = new Pages();
        $responce = $Pages->search($keyword);
        return responce(json_encode($responce), 200);
    }
};
