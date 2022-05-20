<?php

namespace App\models;

use App\core\Model;

class Task extends Model
{
    public string $name='';
    public string $lastname='';
    public string $password='';
    

    public function tableName()
    {
        $this->table="tasks";
    }
}