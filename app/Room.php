<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function devices()
    {
        return $this->hasMany('App\Device');
    }

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id','id');
    }

}
