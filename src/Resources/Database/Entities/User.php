<?php namespace Resources\Database\Entities;

use Resources\Database\Entities\Human;
use Resources\Database\Entities\Status_User;

class User extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;

    public function human(){
        return $this->hasOne(Human::class);
    }

    public function status(){
        return $this->hasOne(Status_User::class);
    }
}