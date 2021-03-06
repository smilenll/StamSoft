@extends('main')
@section('content')


    <div class="col-md-8 offset-md-2">
        {!! Form::model($team , ['route' => ['teams.update',$team->id],'method' => "PUT"]) !!}
        {{Form::label('name','Name:')}}
        {{Form::text('name',null,['class' => 'form-control'])}}

        {{Form::label('league_id','League:',['class'=>'form-label-top'])}}
        {{Form::select('league_id',$leaguesList, null, ['class' => 'form-control'])}}

        {{Form::label('logo','Logo:')}}
        {{Form::text('logo',null,['class' => 'form-control'])}}

        {{Form::label('picture','Picture:')}}
        {{Form::text('picture',null,['class' => 'form-control'])}}

        {{Form::label('players','Players:')}}
        {{Form::select('players[]',$players, null, ['class'=>'form-control js-example-basic-multiple  ','multiple'=>'multiple'])}}

        {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}
        {!! Form::close() !!}
    </div>

@endsection