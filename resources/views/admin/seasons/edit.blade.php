@extends('main')
@section('content')


    {{Form::model($season , ['route' => ['seasons.update',$season->id],'method' => "PUT"])}}

    {{Form::label('season','Title:')}}
    {{Form::text('season',null,['class' => 'form-control'])}}
    {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}

    {{Form::close()}}

@endsection