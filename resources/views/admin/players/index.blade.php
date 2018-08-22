@extends('main')
@section('content')

        <div class="col-md-8">
            <h1>Players</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Team</th>
                    <th>Picture</th>
                    <th>Nationality</th>
                    <th>Position</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $player)
                    <tr>
                        <th>{{$player->id}}</th>
                        <td><a href="">{{$player->name}}</a></td>
                        <td><a href="">{{$player->team_id}}</a></td>
                        <td><a href="">{{$player->picture}}</a></td>
                        <td><a href="">{{$player->nationality}}</a></td>
                        <td><a href="">{{$player->position}}</a></td>
                        <th><a href="{{route('players.edit', $player->id)}}" class="btn btn-primary">Edit</a></th>
                        <th>
                            {!! Form::open(['route' => ['players.destroy', $player->id],'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete',['class' => 'btn btn-danger ']) !!}
                            {!! Form::close() !!}
                        </th>


                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
        <div class="col-md-3">
            {!! Form::open(['route' =>'players.store']) !!}
            <h2>New Player</h2>
            {{Form::label('name', 'Name:')}}
            {{Form::text('name', null, ['class' => 'form-control'])}}
            <br>
            {{Form::label('picture', 'Picture:')}}
            {{Form::text('picture', null, ['class' => 'form-control'])}}
            <br>
            {{Form::label('nationality', 'Nationality:')}}
            {{Form::text('nationality', null, ['class' => 'form-control'])}}
            <br>
            {{Form::label('position', 'Position:')}}
            {{Form::text('position', null, ['class' => 'form-control'])}}
            <br>

            {{Form::submit('create new player', ['class' => 'btn btn-success brn-blog'])}}
            {!! Form::close() !!}
        </div>

@endsection