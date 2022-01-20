<?php

namespace app\models;

use system\library\DB;
use system\library\Models;
use Carbon\Carbon;

class adminLogin extends Models
{
    public function checkLogin($email, $password)
    {
        $today = Carbon::now('+2:00');
        $checkUser = DB::table('tb_users')->where([
            ['email', '=', $email]
        ]);
        $user_exists = $checkUser->exists();
        if ($user_exists) {
            $data = DB::table('tb_users')->where([
                ['email', '=', $email]
            ])->get()->first();
            $hashed_password = $data->password;
            if (password_verify($password, $hashed_password)) {
                return $data;
            }
        } else {
            return null;
        }
    }
    public function setToken($newToken, $loggedInId)
    {
        if (DB::table('tb_users')
            ->where([['id', '=', $loggedInId]])
            ->update(['token' => $newToken])
        ) {
            return $newToken;
        }
        return null;
    }
    public function validateToken($token)
    {
        $user = DB::table('tb_users')->where([['token', '=', $token]]);
        if ($user->exists()) {
            return true;
        }
        return false;
    }
};
