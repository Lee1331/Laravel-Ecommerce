<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    //Relationships
    public function samples(){
        return $this->hasMany('App\Sample');
    }

    public function owner(){
        return $this->belongsTo('App\User');
    }
}
