<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function Stats(){
        return $this->belongsToMany('App\Stat');
    }
    public function hostTeam() {
        return $this->hasMany('App\Team');
    }
    public function guestTeam() {
        return $this->hasMany('App\Team');
    }
}
