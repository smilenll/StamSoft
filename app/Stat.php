<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    public function events() {
        return $this->hasMany('App\Event');
    }
    public function games() {
        return $this->belongsToMany('App\Game');
    }
    public function players() {
        return $this->belongsToMany('App\Player');
    }

    public function playerId() {
        return $this->belongsTo('App\Player');
    }
    public function teamId() {
        return $this->belongsTo('App\Team');
    }
    public function gameId() {
        return $this->belongsTo('App\Game');
    }
}
