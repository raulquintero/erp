<?php namespace Bundles\ProductsBundle\Models\Tables;

use Bundles\ProductsBundle\Models\Tables\Product;
// use Illuminate\Database\Eloquent\SoftDeletes;


class Unit extends \Illuminate\Database\Eloquent\Model{
    
    // use SoftDeletes;

    protected $table="unit_mess";
    public $timestamps = false;
    protected $fillable = ['description'];
    // protected $dates = "deleted_at";
    
    
    public function product(){


        return $this->hasOne(Product::class);

    }
}