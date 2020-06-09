<?php namespace Resources\Database\Entities;

use Resources\Database\Entities\User;
use Resources\Database\Entities\Employee;

class Human extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;

    public function employee(){
        return $this->hasOne(Employee::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}