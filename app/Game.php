<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function Stats(){
        return $this->belongsToMany('App\Stat');
    }
    public function hostTeam() {
        return $this->hasMany('App\Team', 'id', 'host_id')->first();
    }
    public function guestTeam() {
        return $this->hasMany('App\Team', 'id', 'guest_id')->first();
    }

    public function gameIdInStats()
    {
        return $this->hasMany('App\Stat');
    }


    public function getAll($params = []){
        if(empty($params)){
            $result = self::all();
        }
        return $result;
    }
}

