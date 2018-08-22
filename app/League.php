<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function season() {
        return $this->belongsTo('App\Season');
    }
    public function teams() {
        return $this->hasMany('App\Team');
    }
}
