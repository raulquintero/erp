<?php namespace Resources\Database\Tables\DbDefault;



class Family extends \Illuminate\Database\Eloquent\Model
{

    public $timestamps = false;

    protected $fillable = ['description', 'sublevel', 'parent_id', 'level'];

}