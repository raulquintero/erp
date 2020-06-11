<?php namespace Bundles\ProductsBundle\Models;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\Tables\Brand;
use Illuminate\Database\Capsule\Manager as DB;


class BrandModel
{

    public function getAll()
    {
        // $productTypes = Brand::withTrashed()->get();
        $productTypes = Brand::all();

        return $productTypes->toArray();
    }

    public function getById($id)
    {
        try{
            $brand = Brand::findOrFail($id);
            $brand = $brand->toArray();
            Debugger::barDump(['brand' => $brand], 'brand details');
        } catch(\Exception $e){
            $brand = false;
        }
        return $brand;
    }

    public function save($brand)
    {
        if (!$this->validate($brand)){
            Debugger::barDump(['brand' => $brand], 'brand From Form');
            return false;
        }
        Brand::updateOrCreate(['id'=>$brand['id']], $brand);

        return true;
    }


    public function delete($id)
    {
        $brand = Brand::where('id', $id);
        if (!is_object($brand)){
            Debugger::barDump(['error' => 'No se pudo borrar el registro.'], 'Fail');
            return false;
        }
        $brand->delete();
        return true;
    }


    protected function validate($array)
    {
        $isValid = true;
        if (!is_array($array)){
            Debugger::barDump(['error' => 'no es un arreglo'], 'Message');
            $isValid = false;
        }
        return $isValid;
    }

}