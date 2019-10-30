<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Pack extends Model
{
    public function getRouteKeyName(){

        // return 'slug';
        return 'name';
    }

    //Relationships
    public function samples(){
        return $this->hasMany('App\Sample');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function owner(){
        return $this->belongsTo('App\User', 'author_id');
    }
}
