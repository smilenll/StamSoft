<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function league() {
        return $this->belongsTo('App\League');
    }
    public function players() {
        return $this->belongsToMany('App\Player');
    }

    public function teamIdInStats()
    {
        return $this->hasMany('App\Stat');
    }
}
