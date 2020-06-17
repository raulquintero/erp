<?php namespace Bundles\ProductsBundle\Models;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\Tables\Product_prop_detail;
use Illuminate\Database\Capsule\Manager as DB;

class Product_prop_detailModel
{


public function getProperty($id)
{
    $propertyProp = Product_prop_detail::find($id);
    $propertyProp->property;
    return $propertyProp->toArray();
}



}