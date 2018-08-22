<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('admin/players/index')->withPlayers($players);
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
            'name' => 'required|max:255'
        ]);
        $player = new Player;
        $player->name = $request->name;
        $player->picture = $request->picture;
        $player->nationality = $request->nationality;
        $player->position = $request->position;

        $player->save();

        Session::flash('success', 'New category has been created');

        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::find($id);
        return route('admin.players.show')->withPlayer($player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);

        return view('admin.players.edit')->withPlayer($player);

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
        $player = Player::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'nationality' => 'required|max:255',
        ]);
        $player->name = $request->name;
        $player->position = $request->position;
        $player->nationality = $request->nationality;
        $player->picture = $request->picture;
        $player->save();

        Session::flash('success', 'This Player was successful updated');

        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return void
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $player-> teams()->detach();
        $player->delete();

        Session::flash('success', 'The post was successful deleted.');

        return redirect()->route('players.index');
    }
}
