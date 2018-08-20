<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function season() {
        $this->belongsTo('App\Season');
    }
    public function teams() {
        $this->hasMany('App\Team');
    }
}
