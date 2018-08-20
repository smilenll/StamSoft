<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team(){
        $this->belongsTo('App\Team');
    }
    public function Stats(){
        $this->belongsToMeny('App\Stat');
    }
}
