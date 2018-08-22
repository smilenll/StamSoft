@extends('main')
@section('content')

    <div class="col-md-8">
        <h1>Games</h1>
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

            </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr>
                    <th>{{$game->id}}</th>
                    <td><a href="">DATE</a></td>
                    <td><a href="">{{$game->host_id}}</a></td>
                    <td><a href="">{{$game->hostScore}} - {{$game->guestScore}}</a></td>
                    <td><a href="">{{$game->guest_id}}</a></td>
                    <td><a href="">{{$game->location}}</a></td>
                    <th><a href="{{route('games.show', $game->id)}}" class="btn btn-primary">Details</a></th>


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



        {{Form::submit('create new Game', ['class' => 'btn btn-primary brn-blog'])}}
        {!! Form::close() !!}
    </div>



@endsection