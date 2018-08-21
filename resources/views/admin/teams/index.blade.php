@extends('main')
@section('content')

    <div class="col-md-8">
        <h1>Categories</h1>
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
            @foreach($teams as $team)
                <tr>
                    <th>{{$team->id}}</th>
                    <td><a href="">{{$team->name}}</a></td>
                    <td><a href="">{{$team->league_id}}</a></td>
                    <td><a href="">{{$team->logo}}</a></td>
                    <td><a href="">{{$team->picture}}</a></td>
                    <th><a href="{{route('teams.edit', $team->id)}}" class="btn btn-primary">Edit</a></th>
                    <th>
                        {!! Form::open(['route' => ['teams.destroy', $team->id],'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete',['class' => 'btn btn-danger ']) !!}
                        {!! Form::close() !!}
                    </th>


                </tr>
            </tbody>
            @endforeach

        </table>
    </div>
    <div class="col-md-3">
        {!! Form::open(['route' =>'teams.store']) !!}
        <h2>New Team</h2>
        {{Form::label('name', 'Name:')}}
        {{Form::text('name', null, ['class' => 'form-control'])}}
        <br>
        {{Form::label('logo', 'Logo:')}}
        {{Form::text('logo', null, ['class' => 'form-control'])}}
        <br>
        {{Form::label('picture', 'Picture:')}}
        {{Form::text('picture', null, ['class' => 'form-control'])}}
        <br>
        {{Form::label('league_id','League:')}}
        <select class="form-control" name="league_id">
            @foreach($leagues as $league)
                <option value="{{$league->id}}">{{$league->name}}</option>
            @endforeach
        </select>
        <br>
        {{Form::submit('create new Team', ['class' => 'btn btn-success brn-blog'])}}
        {!! Form::close() !!}
    </div>

@endsection