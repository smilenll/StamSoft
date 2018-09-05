@extends('main')
@section('content')

        <div class="col-md-8">
            <h1>Leagues</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Season</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($leagues as $league)
                    <tr>
                        <th>{{$league->id}}</th>
                        <td><a href="">{{$league->name}}</a></td>
                        <td><a href="">{{$league->season_id}}</a></td>
                        <th><a href="{{route('leagues.edit', $league->id)}}" class="btn btn-primary">Edit</a></th>
                        <th>
                            {!! Form::open(['route' => ['leagues.destroy', $league->id],'method' => 'DELETE','class'=>'delete']) !!}
                            {!! Form::submit('Delete',['class' => 'btn btn-danger ']) !!}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
        <div class="col-md-3">
            {!! Form::open(['route' =>'leagues.store']) !!}
            <h2>New League</h2>
            {{Form::label('league', 'Name:')}}
            {{Form::text('league', null, ['class' => 'form-control'])}}
            <br>
            {{Form::label('season_id','Season:')}}
            <select class="form-control" name="season_id">
                @foreach($seasons as $season)
                    <option value="{{$season->id}}">{{$season->season}}</option>
                @endforeach
            </select>
            <br>


            {{Form::submit('create new league', ['class' => 'btn btn-success brn-blog'])}}
            {!! Form::close() !!}
        </div>

@endsection