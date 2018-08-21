@extends('main')
@section('content')

    {!! Form::model($league , ['route' => ['leagues.update',$league->id],'method' => "PUT"]) !!}
    <div class="col-md-8">

        {{Form::label('name','Title:')}}
        {{Form::text('name',null,['class' => 'form-control, input-lg'])}}

        {{Form::label('season_id','Category:',['class'=>'form-label-top'])}}
        {{Form::select('season_id',$seasonsList, null, ['class' => 'form-control'])}}


        {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}
    </div>


    {!! Form::close() !!}

@endsection