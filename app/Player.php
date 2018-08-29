<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function Stats(){
        return $this->belongsToMany('App\Stat');
    }
    public function teams(){
        return $this->belongsToMany('App\Team');
    }

    public function playerIdInStats()
    {
        return $this->hasMany('App\Stat');
    }

}
