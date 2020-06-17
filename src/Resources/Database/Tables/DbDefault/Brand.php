<?php namespace Resources\Database\Tables\DbDefault;

use Resources\Database\Tables\DbDefault\Product;
use Illuminate\Database\Eloquent\SoftDeletes;


class Brand extends \Illuminate\Database\Eloquent\Model{
    
    use SoftDeletes;

    public $timestamps = false;
    protected $fillable = ['description'];
    protected $dates = ["deleted_at"];
    
    
    public function product(){


        return $this->hasOne(Product::class);

    }
}