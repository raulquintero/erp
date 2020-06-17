<?php namespace Resources\Database\Tables\DbDefault;

use Resources\Database\Tables\DbDefault\Product;
use Resources\Database\Tables\DbDefault\Prop_detail;
use Resources\Database\Tables\DbDefault\Product_prop_detail;
// use Illuminate\Database\Eloquent\SoftDeletes;


class Property extends \Illuminate\Database\Eloquent\Model{
    
    // use SoftDeletes;

    public $timestamps = false;
    protected $fillable = ['description'];
    // protected $dates = "deleted_at";
    
    
    public function Product_prop_detail(){
        return $this->hasMany(Product_prop_detail::class);
    }
    
    public function propDetail(){
        return $this->hasMany(Prop_detail::class);
    }
}