<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{

    public function leagues()
    {
        return $this->hasMany('App\League');
    }
}
