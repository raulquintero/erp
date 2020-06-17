<?php namespace Resources\Database\Tables\DbDefault;

use Resources\Database\Tables\DbDefault\Property;


class Prop_detail extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;


public function property()
    {
        return $this->belongsTo(Property::class);
    }




}