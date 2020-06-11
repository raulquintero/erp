<?php namespace Bundles\ProductsBundle\Models;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\Tables\City;
use Illuminate\Database\Capsule\Manager as DB;

use Bundles\ProductsBundle\Models\Tables\Product;
use Bundles\ProductsBundle\Models\Tables\Supplier;

class ProductModel
{

    public function getAll()
    {
        $products = Product::with(['Brand', 'ProductType'])->get();
        // $products = DB::select(DB::raw('select * from `products` where `products`.`id` <= ?'),[2]);
        // dd(Product::hydrate($products)->toArray());
        // $queries = DB::getQueryLog();
        // d($queries);
        return $products->toArray();
    }

    public function getById($id)
    {
        try{
            $product = Product::with(['ProductType'])->findOrFail($id);
            $product->brand;
            $product->prodPropDetail->property->propDetail;

            $product = $product->toArray();
            Debugger::barDump(['product' => $product], 'Product details');
        } catch(\Exception $e){
            Debugger::barDump(['error' => 'SQL Error'], $e);
            $product = false;
        
            // dd($e);
        }
        return $product;
    }

    public function save($product)
    {
        if (!$this->validateProduct($product)){
            Debugger::barDump(['product' => $product], 'Product From Form');
            return false;
        }
        Product::updateOrCreate(['id'=>$product['id']], $product);

        return true;
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if (!is_object($product)){
            Debugger::barDump(['error' => 'No se pudo borrar el registro.'], 'Fail');
            return ['type' => 'fails', 'message' => "Algo ha salido mal con el producto: " . $product->description];
        }
        $product->delete();
        return ['type' => 'success', 'message' => "se ha borrado el producto: " . $product->description];
    }

    protected function validateProduct($product)
    {
        $isValid = true;
        if (!is_array($product)){
            $isValid = false;
        }
        if (!$product['price1'] && !is_float($product['price1'])){
            Debugger::barDump(['error' => 'the price is not valid.'], 'Message');
            $isValid = false;
        }
        return $isValid;


        
    }

    

}
