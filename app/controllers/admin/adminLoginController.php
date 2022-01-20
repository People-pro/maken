<?php

namespace app\controllers\admin;

use app\models\adminLogin;
use system\library\Controller;
use system\library\Cookies;

class adminLoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function adminLogin()
    {
        $email        = input('email');
        $password     = input('password');
        $adminLogin         = new adminLogin();
        Cookies::delete('maken_admin_logged_data');
        $checkLogin = $adminLogin->checkLogin($email, $password);
        if ($checkLogin) {
            Cookies::add('maken_admin_logged_data', json_encode($checkLogin), 10);
            $loggedInId = $checkLogin->id;
            $newToken = getToken($length = 200, $type = 'string');
            $token = $adminLogin->setToken($newToken, $loggedInId);
            $responce['status'] = "ok";
            $responce['message'] = "You are successfully logged in";
            $responce['user'] = $checkLogin;
            $responce['user_token'] = $newToken;
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Email or password are not correct";
            responce(json_encode($responce), 202);
        }
    }
    public function validateToken()
    {
        $token = input('token');
        $adminLogin         = new adminLogin();
        $validateToken     = $adminLogin->validateToken($token);
        if ($validateToken) {
            $responce['status'] = 'ok';
            $responce['validateToken'] = $validateToken;
            $responce['message'] = "The Token is valid";
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = 'bad';
            $responce['validateToken'] = $validateToken;
            $responce['message'] = "The Token is not valid";
            responce(json_encode($responce), 404);
        }
    }
};
