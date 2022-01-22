<?php

namespace app\models;

use system\library\DB;
use system\library\Models;
use Carbon\Carbon;

class adminUser extends Models
{
    public function getUsers()
    {
        $data = DB::table('tb_users')->where('is_deleted', '=', false)->orderBy('id', 'desc')->get();
        return $data;
    }
    public function getSingleUsers($id)
    {
        $data = DB::table('tb_users')->where('id', '=', $id)->orderBy('id', 'desc')->get()->first();
        return $data;
    }
    public function viewUser($id)
    {
        $data = DB::table('tb_users')->where('id', $id)->get()->first();
        return $data;
    }
    public function addUser($names, $email, $image, $password, $type)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_users')->insert(
            [
                'type' => $type,
                'names' => $names,
                'email' => $email,
                'image' => $image,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'created_at' => $today,
                'updated_at' => $today,
                'is_deleted' => false,
            ]
        )) {
            return true;
        } else {
            return true;
        }
    }
    public function updateUser($id, $names, $email, $image, $type)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_users')
            ->where('id', '=', $id)
            ->update(
                [
                    'type' => $type,
                    'names' => $names,
                    'email' => $email,
                    'image' => $image,
                    'updated_at' => $today,
                ]
            )
        ) {
            if (DB::table('tb_files')->where('file_name', $image)->update([
                'is_deleted' => true,
            ])) {
                return true;
            } else {
                return true;
            }
        }
    }
    public function updateAgentAccount($id, $names, $email, $image)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_users')
            ->where('id', '=', $id)
            ->update(
                [
                    'names' => $names,
                    'email' => $email,
                    'image' => $image,
                    'updated_at' => $today,
                ]
            )
        ) {
            return $this->getSingleUsers($id);
        } else {
            return true;
        }
    }
    public function updateAgentPassword($id, $password)
    {
        $today = Carbon::now('+2:00');
        if (DB::table('tb_users')
            ->where('id', '=', $id)
            ->update(
                [
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'updated_at' => $today,
                ]
            )
        ) {
            return true;
        } else {
            return true;
        }
    }
    public function deleteUser($id)
    {
        $today = Carbon::now('+2:00');
        if (
            DB::table('tb_users')->where('id', '=', $id)->update(['is_deleted' => true, 'deleted_at' => $today])
        ) {
            return true;
        }
    }


    public function getUserByToken($token)
    {
        $data = DB::table('tb_users')->where('token', '=', $token)->get()->first();
        return $data;
    }
    public function getLoggedUser($token)
    {
        $admin = DB::table('tb_users')->where([['is_deleted', '=', false], ['token', '=', $token],])->get()->first();
        // $client = DB::table('tb_clients')->where([['is_deleted', '=', false], ['token', '=', $token],])->get()->first();
        if ($admin) {
            $data = $admin;
            $data->type = 'admin';
        } else {
            $data = null;
        }
        return $data;
    }
};
