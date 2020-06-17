<?php namespace Resources\Database\Tables\DbDefault;

use Resources\Database\Tables\DbDefault\Property;


class Product_prop_detail extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;


public function property()
    {
        return $this->belongsTo(Property::class);
    }




}