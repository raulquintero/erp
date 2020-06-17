<?php namespace Bundles\ProductsBundle\Models;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\Tables\ProductType;

class ProductTypeModel
{

    public function getAll(){
        $productTypes = ProductType::all();

        return $productTypes->toArray();
    }


}