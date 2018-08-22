@extends('main')
@section('content')
    <div class="col-md-8 offset-md-2">
        {!! Form::model($league , ['route' => ['leagues.update',$league->id],'method' => "PUT"]) !!}

        {{Form::label('name','League name:')}}
        {{Form::text('name',null,['class' => 'form-control'])}}

        {{Form::label('season_id','Season:',['class'=>' form-label-top'])}}
        {{Form::select('season_id',$seasonsList, null, ['class' => 'form-control'])}}


        {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}

        {!! Form::close() !!}
    </div>
@endsection