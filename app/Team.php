<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function league() {
        $this->belongsTo('App\League');
    }
    public function players() {
        $this->belongsToMany('App\Player');
    }
}
