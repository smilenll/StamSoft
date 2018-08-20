<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function playerStat(){
        $this->belongsTo('App\PlayerStat');
    }
}
