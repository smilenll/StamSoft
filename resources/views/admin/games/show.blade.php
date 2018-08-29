@extends('main')

@section('content')

    <div class="col-md-4">
        <h2>HOST</h2>
        <h3>{{$game->hostTeam()->name}}</h3>
        <h4>Team players</h4>
    </div>
    <div class="col-md-4">
        <h3>Date:{{$game->date}}</h3>
        <hr>
        <h4>statistic</h4>
        <h5>Score:{{$game->hostScore}} - {{$game->guestScore}}</h5>
        <h5>Score:{{$game->location}}</h5>
    </div>
    <div class="col-md-4">
        <h2>GUEST</h2>
        <h3>{{$game->guest_id}}</h3>
        <h4>Team players</h4>
    </div>
    {{$game->hostTeam()->name}}
    {{--{{dd($game->hostTeam() )}}--}}
    {{--@foreach($game->hostTeam() as $host)--}}
        {{--{{$host->name}}--}}
    {{--@endforeach--}}

@endsection