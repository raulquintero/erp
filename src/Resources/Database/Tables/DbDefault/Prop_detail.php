<?php namespace Resources\Database\Tables\DbDefault;

use Reources \Models\Tables\Control\Menu;


class Prop_detail extends \Illuminate\Database\Eloquent\Model{

    protected $connection = 'default';
    public $timestamps = false;
    // protected $fillable = ['option', 'url', 'sublevel', 'parent_id', 'level', 'position', 'menu_id'];


    public function property(){
        return $this->belongsTo(Menu::class);
    }
}