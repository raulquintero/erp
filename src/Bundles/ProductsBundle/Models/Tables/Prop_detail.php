<?php namespace Bundles\ProductsBundle\Models\Tables;

use Bundles\ProductsBundle\Models\Tables\Property;


class Prop_detail extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;


public function property()
    {
        return $this->belongsTo(Property::class);
    }




}