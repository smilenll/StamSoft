<?php

namespace App\Http\Controllers;

use App\League;
use App\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leagues = League::all();
        $seasons = Season::all();
        return view('admin/leagues/index')->withLeagues($leagues)->withSeasons($seasons);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'league' => 'required|max:255',
                'season_id' => 'required|integer',
            ]);
            $league = new League();

            $league->name = $request->league;
            $league->season_id = $request->season_id;

            $league->save();

            $this->setSession('alert-success', 'New league has been created');

        } catch (\Exception $e) {
            $this->setSession('alert-danger', $e->getMessage());
        }

        return redirect()->route('leagues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
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
        $league = League::find($id);
        $seasons = Season::all();
        $seasonsList = [];
        foreach ($seasons as $season) {
            $seasonsList[$season->id] = $season->season;
        }
        return view('admin.leagues.edit')->withLeague($league)
            ->withSeasonsList($seasonsList);
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
        try {
            $league = League::find($id);

            $this->validate($request, [
                'name' => 'required|max:255',
                'season_id' => 'required'
            ]);
            $league->name = $request->name;
            $league->season_id = $request->season_id;

            $league->save();

            $this->setSession('success', 'Successfully UPDATED');

        } catch (\Exception $e) {
            $this->setSession('alert-danger', $e->getMessage());
        }
        return redirect()->route('leagues.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $league = League::find($id);
        $league->delete();

        Session::flash('success', 'The league was successful deleted.');

        return redirect()->route('leagues.index');
    }
}
