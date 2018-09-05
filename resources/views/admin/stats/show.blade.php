@extends('main')
@section('content')

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6">
                <h3>{{$teams[$game->host_id-1]['name']}}</h3>
                {!! Form::open(['route' =>'stats.store']) !!}
                {{Form::label('event_id','Event:')}}
                <select class="form-control" name="event_id">
                    @foreach($events as $event)
                        <option value="{{$event->id}}">{{$event->name}}</option>
                    @endforeach
                </select>
                {{Form::label('player_id','Player:')}}
                <select class="form-control" name="player_id">
                    @foreach($players as $player)
                        <option value="{{$player->id}}">{{$player->name}}</option>
                    @endforeach
                </select>

                <input type="hidden" id="custId" name="team_id" value="{{$game['host_id']}}">
                <input type="hidden" id="custId" name="game_id" value="{{$game['id']}}">
                <Br>
                {{Form::submit('Add Host event', ['class' => 'btn btn-success brn-blog'])}}
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                <h3>{{$teams[$game->guest_id-1]['name']}}</h3>
                {!! Form::open(['route' =>'stats.store']) !!}
                {{Form::label('event_id','Event:')}}
                <select class="form-control" name="event_id">
                    @foreach($events as $event)
                        <option value="{{$event->id}}">{{$event->name}}</option>
                    @endforeach
                </select>
                {{Form::label('player_id','Player:')}}
                <select class="form-control" name="player_id">
                    @foreach($players as $player)
                        <option value="{{$player->id}}">{{$player->name}}</option>
                    @endforeach
                </select>
                <input type="hidden" id="custId" name="team_id" value="{{$game['guest_id']}}">
                <input type="hidden" id="custId" name="game_id" value="{{$game['id']}}">
                <Br>
                {{Form::submit('Add Host event', ['class' => 'btn btn-success brn-blog'])}}
                {!! Form::close() !!}
            </div>

        </div>
    </div>
    <div class="col-md-4">
        <h1>Stats</h1>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Team</th>
                <th>Player</th>
                <th>Event</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stats as $stat)
                @if($stat['team_id'] === $game['host_id'] or $stat['team_id'] === $game['guest_id'])
                    <tr>
                        <td>{{$stat->id}}</td>
                        <td>{{$teams[$stat->team_id-1]['name']}}</td>
                        <td>{{$players[$stat->player_id-1]['name']}}</td>
                        <td>{{$events[$stat->event_id-1]['name']}}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>


        </table>
    </div>

@endsection