<?php namespace Resources\Database\Models;

use Tracy\Debugger;
use Resources\Database\Tables\DbDefault\ProductType;

class ProductTypeModel
{

    public function getAll(){
        $productTypes = ProductType::orderBy('description', 'Asc')->get();

        return $productTypes->toArray();
    }


}