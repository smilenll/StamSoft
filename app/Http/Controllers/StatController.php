<?php

namespace App\Http\Controllers;

use App\Event;
use App\Game;
use App\Player;
use App\Stat;
use App\Team;
use Illuminate\Http\Request;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
           $this->validate($request, [
               'event_id'=>'required|integer',
               'game_id'=>'required|integer',
               'player_id'=>'required|integer',
               'team_id'=>'required|integer'
           ]);
           $stats=new Stat;
           $stats->event_id = $request->event_id;
           $stats->game_id = $request->game_id;
           $stats->player_id = $request->player_id;
           $stats->team_id = $request->team_id;
           $stats->save();

          $this->setSession('alert-success', 'New stat has been created');

       }catch (\Exception $e) {
           $this->setSession('alert-danger', $e->getMessage());
       }
        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game=Game::find($id);
        $stats=Stat::all();
        $teams=Team::all();
        $events=Event::all();
        $players=Player::all();

        return view('admin.stats.show')
            ->withGame($game)
            ->withStats($stats)
            ->withTeams($teams)
            ->withEvents($events)
            ->withPlayers($players);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
