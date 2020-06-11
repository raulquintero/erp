<?php namespace Bundles\ProductsBundle\Models\Tables;

use Bundles\ProductsBundle\Models\Tables\Permission;



class Menu extends \Illuminate\Database\Eloquent\Model{

    public $timestamps = false;
    protected $fillable = ['option', 'url', 'sublevel', 'parent_id', 'level', 'position'];

   
    
    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
    

    // this is for test, retrieve the path for option selected
    public function parent()
    {
        return $this->belongsTo(\Bundles\ProductsBundle\Models\Tables\Menu::class, 'parent_id', 'id')->with('parent');
    }


}