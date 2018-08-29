@extends('main')
@section('content')


    <div class="col-md-8">
        <h2>{{$game->host_id}} </h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Host</h3>
                {!! Form::open(['route' =>'stats.store']) !!}
                {{Form::label('event_id','Event:')}}
                <select class="form-control" name="game_id">
                    @foreach($events as $event)
                        <option value="{{$event->id}}">{{$event->name}}</option>
                    @endforeach
                </select>
                {{Form::label('player_id','Player:')}}
                <select class="form-control" name="game_id">
                    @foreach($players as $player)
                        <option value="{{$player->id}}">{{$player->name}}</option>
                    @endforeach
                </select>
                <input type="hidden" id="custId" name="TEAM GUEST" value="">
                <Br>
                {{Form::submit('Add Host event', ['class' => 'btn btn-success brn-blog'])}}
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                <h3>Guest</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <h1>Teams</h1>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>League</th>
                <th>Logo</th>
                <th>Picture</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>


        </table>
    </div>

@endsection