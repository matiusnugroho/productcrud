<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function unit(){
        return $this->belongsTo('App\Unit');
    }
}
