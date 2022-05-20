<?php

namespace App\core;

use App\models\User;

class Auth
{

    //first login
    //

    public function login($id):bool
    {
        return Cookie::put('id', $id, 120);
    }

    public function isLogin($id):bool
    {

        return Cookie::exists($id);
        
    }

    public function user():array|false
    {

        $nameId=Cookie::get('id');

        return User::do()->find($nameId);

    }
    public static function do():Auth
    {

        return new static;

    }
    
}
