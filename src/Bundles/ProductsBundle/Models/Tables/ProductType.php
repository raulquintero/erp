<?php namespace Bundles\ProductsBundle\Models\Tables;

use Bundles\ProductsBundle\Models\Tables\Product;


class ProductType extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;
    protected $name="product_types";
    // protected $fillable = ['name', 'description', 'price', 'supplier_id'];

    public function product(){
        return $this->hasOne(Product::class);
    }

}