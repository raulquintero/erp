<?php namespace Resources\Database\Tables\DbDefault;

use Reources \Models\Tables\Control\Menu;


class Permission extends \Illuminate\Database\Eloquent\Model{

    protected $connection = 'controlDB';
    public $timestamps = false;
    protected $fillable = ['option', 'url', 'sublevel', 'parent_id', 'level', 'position', 'menu_id'];


    public function menu(){
        return $this->hasOne(Menu::class);
    }
}