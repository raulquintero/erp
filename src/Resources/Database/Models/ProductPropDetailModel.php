<?php namespace Resources\Database\Models;

use Tracy\Debugger;
use Resources\Database\Tables\DbDefault\Product_prop_detail;
use Illuminate\Database\Capsule\Manager as DB;

class ProductPropDetailModel
{


    public function getProperty($id)
    {
        $propertyProp = Product_prop_detail::with(['Property'])->where('product_id', $id)->get();
        // $propertyProp->property;
        return $propertyProp->toArray();
    }

    public function getPropertiesByProductId($productId = 0)
    {
        $properties = Product_prop_detail::select('property_id')->where('product_id', $productId)->get()->toArray();
        return $properties;
    }

}