<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function Stats(){
        $this->belongsToMany('App\Stat');
    }
    public function teams(){
        $this->belongsToMany('App\Team');
    }

}
