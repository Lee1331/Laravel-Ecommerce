<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    //Relationships
    public function pack(){
        return $this->belongsTo('App\Pack');
    }
}
