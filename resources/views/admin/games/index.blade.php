@extends('main')
@section('content')

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6"><h1>Games</h1></div>
            <div class="col-md-6 pull-right">
                <form method="get">
                    <select name="host">
                        <option disabled>Select host</option>
                        <option value="" >all</option>
                        @foreach($teams as $team)
                        <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                    <select name="guest">
                        <option disabled>Select guest</option>
                        <option value="" >all</option>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-success">Search</button>
                </form>

            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Host</th>
                <th>Score</th>
                <th>Guest</th>
                <th>Location</th>
                <th></th>
                <th></th>

            </tr>
            </thead>
            <tbody>

            @foreach($games as $game)
                <tr>
                    <th>{{$game->id}}</th>
                    <td><a href="">DATE</a></td>
                    <td><a href="">{{$teams[$game->host_id-1]['name']}}</a></td>
                    <td><a href="">{{$game->hostScore}} - {{$game->guestScore}}</a></td>
                    <td><a href="">{{$teams[$game->guest_id-1]['name']}}</a></td>
                    <td><a href="">{{$game->location}}</a></td>
                    <th><a href="{{route('games.show', $game->id)}}" class="btn btn-primary">Details</a></th>
                    <th><a href="{{route('stats.show', $game->id)}}" class="btn btn-warning">add Stats</a></th>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class="col-md-3">
        {!! Form::open(['route' =>'games.store']) !!}
        <h2>New Season</h2>
        {{Form::label('date', 'Date:')}}
        {{Form::text('date', null, ['class' => 'form-control'])}}

        {{Form::label('host_id','Host:')}}
        <select class="form-control" name="host_id">
            @foreach($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>

        {{Form::label('guest_id','Guest:')}}
        <select class="form-control" name="guest_id">
            @foreach($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>

        {{Form::label('location', 'Location:')}}
        {{Form::text('location', null, ['class' => 'form-control'])}}



        {{Form::submit('create new Game', ['class' => 'btn btn-success brn-blog'])}}
        {!! Form::close() !!}
    </div>



@endsection