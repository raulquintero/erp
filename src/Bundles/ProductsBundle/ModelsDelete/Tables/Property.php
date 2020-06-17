<?php namespace Bundles\ProductsBundle\Models\Tables;

use Bundles\ProductsBundle\Models\Tables\Product;
use Bundles\ProductsBundle\Models\Tables\Prop_detail;
use Bundles\ProductsBundle\Models\Tables\Product_prop_detail;
// use Illuminate\Database\Eloquent\SoftDeletes;


class Property extends \Illuminate\Database\Eloquent\Model{
    
    // use SoftDeletes;

    public $timestamps = false;
    protected $fillable = ['description'];
    // protected $dates = "deleted_at";
    
    
    public function Product_prop_detail(){
        return $this->hasMany(Product_prop_detail::class);
    }
    
    public function propDetail(){
        return $this->hasMany(Prop_detail::class);
    }
}