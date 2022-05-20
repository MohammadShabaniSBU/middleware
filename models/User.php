<?php

namespace App\models;

use App\core\Model;

class User extends Model
{
    public $lastname='';
    public $email='';
    public $password='';
    public $reapetpassword='';
     

    public function tableName()
    {
        $this->table="users";
    }
    


}
