<?php namespace Bundles\ProductsBundle\Models;

use Tracy\Debugger;
use Bundles\ProductsBundle\Models\Tables\Menu;
use Bundles\ProductsBundle\Models\Tables\Permission;
use Illuminate\Database\Capsule\Manager as DB;

class MenuModel
{

	public function getAllWithLevels()
    {
        $menues = Menu::where('sublevel', 1)->get();
        // dd($families);
        return $menues->toArray();
	}
	
    public function getById($id)
    {
        try{
			$menu = Menu::findOrFail($id);
			$menu->permission;
            $menu = $menu->toArray();
            Debugger::barDump(['menu' => $menu], 'menu details');
        } catch(\Exception $e){
            $menu = false;
            // dd($e);
        }
        return $menu;
	}
	
	public function getSelectedMenu($id = 0)
	{
		$options = Menu::where("parent_id", $id)->orderBy('position', 'ASC')->get();
		return $options->toArray();
	}
	
	public function getSelectedMenuPath($id = 0)
	{
		$sql = "WITH RECURSIVE recur AS (
			SELECT id, option_name, parent_id,url, 0 AS nivel
			FROM menus 
			WHERE id = :categoryId 
			UNION ALL
			SELECT e.id, e.option_name, e.parent_id, e.url,recur.nivel +1  AS level
			FROM menus e
			JOIN recur ON e.id = recur.parent_id) 
			select * from recur order by parent_id";

		$bindings = ['categoryId' => $id];
		$paths = DB::select($sql, $bindings);
        $paths = Menu::hydrate($paths)->toArray();
		
		return $paths;
	}
	
	public function getSelectedMenuPathExamples( $id = 0)
	{
		#Comment examples with sql statemenst raw

		// $pdo = DB::connection('mysql2')->getPdo();

		// $pdo = DB::connection()->getPdo();
		// $stmt = $pdo->prepare($sql);
		// $stmt->execute($bindings);	
		// $paths   = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		
		// $path = Menu::find(1);
		// $path->child;
		// dd($paths);

	}




	public function getMenus()
    {
		$options = Menu::orderBy('position')->get()->toArray(); 
		Menu::all()->toArray();
		
        $option = $this->buildMenu($options);
		
        return $option;
		
	}
	
    public function buildMenu($optionArray,  $id = 0)
    {
			$mid =0;
		foreach ($optionArray as $rid => $subMenu) {
			// d('sub', $subMenu);

			if ($subMenu['parent_id'] == $id){
				if ($subMenu['sublevel'] == 0){
					$option[$subMenu['position']] = $subMenu;
					$option[$subMenu['position']]['sublinks'] = null;
				} else {
					$option[$subMenu['position']] = $subMenu;
					$option[$subMenu['position']]['sublinks'] = $this->buildMenu($optionArray, $subMenu['id']);
				}

			} 

			$mid = $mid + 1;
			
        }

		// d($mid, $option, $optionArray);
        return $option ;
    }

    public function save($menu)
    {
		// dd($menu);
        if (!$this->validateMenu($menu)){
            Debugger::barDump(['menu' => $menu], 'menu From Form');
            return false;
        }
		$menuObj = Menu::updateOrCreate(['id'=>$menu['id']], $menu);
		$menuObj->menu_id = $menuObj->id; 
		$permissionObj = Permission::updateOrCreate(['menu_id' => $menuObj->id], $menu);
		// Debugger::barDump(['menu' => $menuObj->toArray()], 'menu From Form');

        return true;
	}
	
	protected function validateMenu($menu)
    {
		#ToDo develop validateMenu method
		// dd($family);
        $isValid = true;
        // if (!$product['price1'] && !is_float($product['price1'])){
        //     Debugger::barDump(['error' => 'the price is not valid.'], 'Message');
        //     $isValid = false;
        // }
        return $isValid;
    }


}