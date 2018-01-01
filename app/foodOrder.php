<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foodOrder extends Model
{

    public function foodorder(){
        return $this->belongsTo('App\User');
    }

    public function foodorder(){
    	return $this->belongsTo('App\Kitchen');
    }

}
