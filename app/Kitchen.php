<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{	

	public $table = "kitchen";

    public function menu(){
    	return $this->hasOne('App\Menu');
    }

    public function foodorder(){
    	return $this->hasMany('App\foodOrder');
    }
     
}

