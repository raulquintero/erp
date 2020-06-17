<?php namespace Resources\Database\Models;

use Tracy\Debugger;
use Resources\Database\Tables\DbDefault\Prop_detail;
use Illuminate\Database\Capsule\Manager as DB;

class PropDetailModel
{


public function getByPropertyId($id)
{
    $propertyDetails = Prop_detail::where('property_id', $id)->get();
    $propertyDetails;
    return $propertyDetails->toArray();
}



}