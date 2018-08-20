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
        $seasons=Season::all();
        return view('admin/seasons/index')->withSeasons($seasons);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'season' => 'required|max:255'
        ]);
        $season = new Season;
        $season->season = $request->season;

        $season->save();

        Session::flash('success', 'New category has been created');

        return redirect()->route('seasons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $season = Season::find($id);

        $this->validate($request, ['season' => 'required|max:255']);

        $season->season = $request->season;
        $season->save();

        Session::flash('success', 'Successfully save new category');

        return redirect()->route('seasons.index', $season->id);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $season = Season::find($id);

        $season->delete();

        Session::flash('success', 'The post was successful deleted.');

        return redirect()->route('seasons.index');
    }
}
