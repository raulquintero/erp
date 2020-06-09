<?php namespace Resources\Database\Entities;


class Employee extends \Illuminate\Database\Eloquent\Model 
{
    public $timestamps = false;

    protected $fillable = ['user_active'];

    public function user(){
        return $this->hasOne(User::class);
    }
    public function human(){
        return $this->belongsTo(Human::class);
    }
}