<?php namespace Bundles\ProductsBundle\Models\Tables;



class Family extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;

    protected $fillable = ['description', 'sublevel', 'parent_id', 'level'];

}