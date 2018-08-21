<?php

namespace App\Http\Controllers;

use App\League;
use App\Player;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leagues = League::all();
        $teams = Team::all();
        return view('admin/teams/index')->withTeams($teams)->withLeagues($leagues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'league_id' => 'required|integer',
        ]);
        $team = new Team();

        $team->name = $request->name;
        $team->league_id = $request->league_id;
        $team->logo = $request->logo;
        $team->picture = $request->picture;

        $team->save();

        $team->players()->sync($request->players, true);

        Session::flash('success', 'New TEAM has been created');

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        $leagues = League::all();

        $leaguesList = [];
        foreach ($leagues as $league) {
            $leaguesList[$league->id] = $league->name;
        }
        $players = Player::all();

        return view('admin.teams.edit')
            ->withTeam($team)
            ->withLeaguesList($leaguesList)
            ->withPlayers($players);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team=Team::find($id);
        $this->validate($request, array(
            'name' => 'required|max:255',
            'league_id' => 'required|integer'
        ));

        $team->name=$request->name;
        $team->league_id=$request->league_id;
        $team->logo=$request->logo;
        $team->picture=$request->picture;
        $team->save();

        if(isset($request->players)) {
            $team->players()->sync($request->players);
        } else {
            $team->players()->sync([]);
        }
        Session::flash('success', 'This post was successful saved');

        return redirect()->route('teams.index', $team->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
