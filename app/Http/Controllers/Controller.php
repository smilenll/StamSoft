<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setSession($type, $massage)
    {
        Session::flash('message', $massage);
        Session::flash('alert-class', $type);
    }
    public function filterGame($request,$query)
    {
        if($hostId = $request->get('host')){
            return $games = $query::where('host_id', $hostId)->get();
        }
        if($guestId = $request->get('guest')){
           return $games= $query::where('guest_id',$guestId)->get();
        }
    }
}
