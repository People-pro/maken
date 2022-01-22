<?php

namespace app\controllers\admin;

use app\models\adminUser;
use system\library\Controller;

class adminUserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsers()
    {
        $adminUser = new adminUser();
        $Users = $adminUser->getUsers();
        $responce =  $Users;

        return responce(json_encode($responce), 200);
    }
    public function addUser()
    {
        $names = input('names');
        $type = 'admin';
        $email  = input('email');
        $image     = input('image');
        $password  = input('password');
        $adminUser      = new adminUser();
        $newUser        = $adminUser->addUser($names, $email, $image, $password, $type);
        if ($newUser) {
            $responce['status'] = "ok";
            $responce['message'] = "User was saved";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "User was not saved";
            return responce(json_encode($responce), 404);
        }
    }
    public function viewUser($id)
    {
        $adminUser = new adminUser();
        $viewUser = $adminUser->viewUser($id);

        $responce =  $viewUser;

        return responce(json_encode($responce), 200);
    }
    public function updateUser()
    {
        $id = input('id');
        $names = input('names');
        $type = 'admin';
        $email  = input('email');
        $image     = input('image');
        $adminUser      = new adminUser();
        $updateUser     = $adminUser->updateUser($id, $names, $email, $image, $type);
        if ($updateUser) {
            $responce['status'] = "ok";
            $responce['message'] = "User was updated";
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "User was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function updateAgentAccount()
    {
        $token = input('token');
        $adminUser = new adminUser();
        $token = input('token');
        $user = $adminUser->getUserByToken($token);

        $names = input('names');
        $email  = input('email');
        $image     = input('image');
        $adminUser      = new adminUser();
        $updateAgentAccount     = $adminUser->updateAgentAccount($user->id, $names, $email, $image);
        if ($updateAgentAccount) {
            $responce['status'] = "ok";
            $responce['message'] = "Account was updated";
            $responce['user'] = $updateAgentAccount;
            return responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "Account was not updated";
            return responce(json_encode($responce), 404);
        }
    }
    public function updateAgentPassword()
    {
        $adminUser = new adminUser();
        $token = input('token');
        $user = $adminUser->getUserByToken($token);

        $cpassword = input('cpassword');
        $npassword = input('npassword');
        if (password_verify($cpassword, $user->password)) {
            $updateAgentPassword     = $adminUser->updateAgentPassword($user->id, $npassword);
            if ($updateAgentPassword) {
                $responce['status'] = "ok";
                $responce['message'] = "Password was updated";
                return responce(json_encode($responce), 202);
            } else {
                $responce['status'] = "bad";
                $responce['message'] = "Something went wrong";
                return responce(json_encode($responce), 404);
            }
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "The current password is incorrect!";
            return responce(json_encode($user), 202);
        }
    }
    public function deleteUser($id)
    {
        $adminUser      = new adminUser();
        $deleteUser     = $adminUser->deleteUser($id);
        if ($deleteUser) {
            $responce['status'] = "ok";
            $responce['message'] = "User was deleted";
            responce(json_encode($responce), 202);
        } else {
            $responce['status'] = "bad";
            $responce['message'] = "User was not deleted";
            responce(json_encode($responce), 404);
        }
    }
};
