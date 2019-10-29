<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Relationships
    public function packs(){
        return $this->belongsToMany('App\Pack');
    }
}
