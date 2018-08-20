<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    public function events() {
        $this->hasMany('App\Event');
    }
    public function games() {
        $this->belongsToMany('App\Game');
    }
    public function players() {
        $this->belongsToMany('App\Player');
    }
}
