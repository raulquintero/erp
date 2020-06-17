<?php namespace Bundles\ProductsBundle\Models;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\Tables\Unit;
use Illuminate\Database\Capsule\Manager as DB;


class UnitModel
{

    public function getAll()
    {
        $productTypes = Unit::all();

        return $productTypes->toArray();
    }

    public function getById($id)
    {
        try{
            $unit = Unit::findOrFail($id);
            $unit = $unit->toArray();
            Debugger::barDump(['unit' => $unit], 'unit details');
        } catch(\Exception $e){
            Debugger::barDump(['error' => $e], 'Error');
            $unit = false;
            // dd($e);
        }
        return $unit;
    }

    public function save($unit)
    {
        if (!$this->validateProduct($unit)){
            Debugger::barDump(['unit' => $unit], 'unit From Form');
            return false;
        }
        Unit::updateOrCreate(['id'=>$unit['id']], $unit);

        return true;
    }


    public function delete($id)
    {
        $unit = Unit::where('id', $id);
        if (!is_object($unit)){
            Debugger::barDump(['error' => 'No se pudo borrar el registro.'], 'Fail');
            return false;
        }
        $unit->delete();
        // $unit->restore();
        return true;
    }


    protected function validateProduct($unit)
    {
        // dd($unit);
        $isValid = true;
        // if (!$product['price1'] && !is_float($product['price1'])){
        //     Debugger::barDump(['error' => 'the price is not valid.'], 'Message');
        //     $isValid = false;
        // }
        return $isValid;
    }

}