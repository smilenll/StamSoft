<?php

namespace App\Http\Controllers;

use App\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = Season::all();
        return view('admin/seasons/index')->withSeasons($seasons);
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
                'season' => 'required|max:255'
            ]);
            $season = new Season;
            $season->season = $request->season;
            $season->save();

            $this->setSession('alert-success', 'New season has been created');

        } catch (\Exception $e) {
            $this->setSession('alert-danger', $e->getMessage());
        }
        return redirect()->route('seasons.index');
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
        $season = Season::find($id);

        return view('admin.seasons.edit')->withSeason($season);
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
            $season = Season::find($id);

            $this->validate($request, ['season' => 'required|max:255']);

            $season->season = $request->season;
            $season->save();
            $this->setSession('alert-success', 'Successfully updated');
        }
        catch (\Exception $e) {
            $this->setSession('alert-danger', $e->getMessage());
        }
        return redirect()->route('seasons.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = Season::find($id);
        $season->delete();

        Session::flash('success', 'The season was successful deleted.');

        return redirect()->route('seasons.index');
    }
}
