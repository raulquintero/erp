<?php namespace Resources\Database\Entities;

use Resources\Database\Entities\User;

class Status_User extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;
    protected $table = 'status_user';

    public function user(){
        return $this->belongsTo(User::class);
    }
}