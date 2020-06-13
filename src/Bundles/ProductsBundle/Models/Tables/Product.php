<?php namespace Bundles\ProductsBundle\Models\Tables;

use Bundles\ProductsBundle\Models\Tables\Product_prop_detail;
use Bundles\ProductsBundle\Models\Tables\ProductType;


class Product extends TableAbstract
{

    public $timestamps = false;

    protected $fillable = ['code', 'description', 'price1', 'price2', 'price3', 'price4', 'price5', 'unit_mess_id', 'product_type_id', 'brand_id'];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function prodPropDetail()
    {
        return $this->hasOne(Product_prop_detail::class);
    }
    public function productType(){
        
        return $this->belongsTo(ProductType::class);
    }

}