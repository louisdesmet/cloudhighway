<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }
    
    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }
    
    /*-public function prices()
    {
        return $this->belongsToMany('App\Price');
    }*/
    
    public function prices()
    {
        return $this->hasMany('App\Price');
    }
}
