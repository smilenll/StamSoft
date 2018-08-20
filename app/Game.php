<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function Stats(){
        $this->belongsToMany('App\Stat');
    }
    public function hostTeam() {
        $this->hasMany('App\Team');
    }
    public function guestTeam() {
        $this->hasMany('App\Team');
    }
}
