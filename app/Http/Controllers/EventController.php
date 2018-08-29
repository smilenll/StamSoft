<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin/events/index')->withEvents($events);
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
                'name' => 'required|max:255'
            ]);
            $event = new Event;
            $event->name = $request->name;

            $event->save();
            $this->setSession('success', 'New event has been created');

        } catch (\Exception $e) {
            $this->setSession('alert-danger', $e->getMessage());
        }
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        return view('admin.events.edit')->withEvent($event);
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
        try{
            $event = Event::find($id);

            $this->validate($request, ['name' => 'required|max:255']);

            $event->name = $request->name;
            $event->save();

            $this->setSession('success', 'Successfully updated');

            return redirect()->route('events.index');
        }

    catch(\Exception $e) {
        $this->setSession('alert-danger', $e->getMessage());
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        Session::flash('success', 'The event was successful deleted.');

        return redirect()->route('events.index');
    }
}
