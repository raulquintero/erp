<?php namespace Bundles\ProductsBundle\Models\Tables;

use Bundles\ProductsBundle\Models\Tables\Product;
use Illuminate\Database\Eloquent\SoftDeletes;


class Brand extends \Illuminate\Database\Eloquent\Model{
    
    use SoftDeletes;

    public $timestamps = false;
    protected $fillable = ['description'];
    protected $dates = ["deleted_at"];
    
    
    public function product(){


        return $this->hasOne(Product::class);

    }
}