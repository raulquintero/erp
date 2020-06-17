<?php namespace Bundles\ProductsBundle\Models;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\Tables\Family;
use Illuminate\Database\Capsule\Manager as DB;


class FamilyModel 
{

    public function getAllWithLevels()
    {
        $families = Family::where('sublevel', 1)->get();
        return $families->toArray();
    }

    public function getAll($id = 0, $withLevels = -1)
    {
        $families = Family::where('parent_id', '=', $id)->get();
        $families = $families->toArray();

        foreach ($families as $key => $value) {
            $nprod = Family::where('parent_id', $value['id'])        
            ->select( DB::raw('count(description) AS subcategories'))
            ->groupBy('parent_id')->first();
            if (is_object($nprod)){
                $families[$key]['subcategories'] = $nprod->subcategories; 
            } else {
                $families[$key]['subcategories'] = 0; 

            }
        }

        d($families);
        return $families;
    }

    public function getSelectedLevelPath($id = 0)
	{
		$sql = "WITH RECURSIVE recur AS (
			SELECT id, description, parent_id, 0 AS nivel
			FROM families 
			WHERE id = :familyId 
			UNION ALL
			SELECT e.id, e.description, e.parent_id,recur.nivel +1  AS level
			FROM families e
			JOIN recur ON e.id = recur.parent_id) 
            select * from recur order by parent_id";
            
		$bindings = ['familyId' => $id];
		$paths = DB::select($sql, $bindings);
        $paths = Family::hydrate($paths)->toArray();

		return $paths;
	}

    public function getById($id)
    {
        try{
            $family = Family::findOrFail($id);
            $family = $family->toArray();
            Debugger::barDump(['family' => $family], 'family details');
        } catch(\Exception $e){
            $family = false;
        }
        return $family;
    }

    public function save($family)
    {
        if (!$this->validateProduct($family)){
            Debugger::barDump(['family' => $family], 'family From Form');
            return false;
        }
        Family::updateOrCreate(['id'=>$family['id']], $family);

        return true;
    }

    public function delete($id)
    {
        $family = Family::find($id);
        if (!is_object($family)){
            Debugger::barDump(['error' => 'No se pudo borrar el registro.'], 'Fail');
            return ['type' => 'fails', 'message' => "Algo ha salido mal con la familia: " . $family->description];
        }
        $family->delete();
        return ['type' => 'success', 'message' => "se ha borrado la familia: " . $family->description];
    }

    public function getParentId($id)
    {
        $parentId = Family::where('id',$id)->first(['parent_id']);
        return $parentId->toArray()['parent_id'];
    }

    protected function validateProduct($family)
    {
        // dd($family);
        $isValid = true;
        // if (!$product['price1'] && !is_float($product['price1'])){
        //     Debugger::barDump(['error' => 'the price is not valid.'], 'Message');
        //     $isValid = false;
        // }
        return $isValid;
    }

}
