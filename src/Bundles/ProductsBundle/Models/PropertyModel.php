<?php namespace Bundles\ProductsBundle\Models;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\Tables\Property;
use Illuminate\Database\Capsule\Manager as DB;


class PropertyModel
{

    public function getAll()
    {
        $productTypes = Property::all();

        return $productTypes->toArray();
    }

    public function getById($id)
    {
        try{
            $property = Property::findOrFail($id);
            $property = $property->toArray();
            Debugger::barDump(['property' => $property], 'property details');
        } catch(\Exception $e){
            $property = false;
            // dd($e);
        }
        return $property;
    }

    public function save($property)
    {
        if (!$this->validate($property)){
            Debugger::barDump(['property' => $property], 'property From Form');
            return false;
        }
        Property::updateOrCreate(['id'=>$property['id']], $property);

        return true;
    }


    public function delete($id)
    {
        $property = Property::where('id', $id);
        if (!is_object($property)){
            Debugger::barDump(['error' => 'No se pudo borrar el registro.'], 'Fail');
            return false;
        }
        $property->delete();
        // $property->restore();
        return true;
    }


    protected function validate($array)
    {
        // dd($property);
        $isValid = true;
        // if (!$product['price1'] && !is_float($product['price1'])){
        //     Debugger::barDump(['error' => 'the price is not valid.'], 'Message');
        //     $isValid = false;
        // }
        return $isValid;
    }

}