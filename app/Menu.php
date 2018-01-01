<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menu(){
    	return $this->belongsTo('App\Kitchen');
    }
}
