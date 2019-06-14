<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','slug','details','price','description','category_id','photo'
    ];
    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
}
