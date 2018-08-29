@extends('main')
@section('content')

        <div class="col-md-8">
            <h1>Seasons</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($seasons as $season)
                    <tr>
                        <th>{{$season->id}}</th>
                        <td><a href="">{{$season->season}}</a></td>
                        <th><a href="{{route('seasons.edit', $season->id)}}" class="btn btn-primary">Edit</a></th>
                        <th>
                            {!! Form::open(['route' => ['seasons.destroy', $season->id],'method' => 'DELETE', 'class'=>'delete']) !!}
                            {!! Form::submit('Delete',['class' => 'btn btn-danger ']) !!}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
        <div class="col-md-3">
            {!! Form::open(['route' =>'seasons.store']) !!}
            <h2>New Season</h2>
            {{Form::label('season', 'Name:')}}
            {{Form::text('season', null, ['class' => 'form-control'])}}
            <br>

            {{Form::submit('create new season', ['class' => 'btn btn-success brn-blog'])}}
            {!! Form::close() !!}
        </div>

@endsection