@extends('main')
@section('content')

    {{dd($league)}}
    {{Form::model($league , ['route' => ['leagues.update',$league->id],'method' => "PUT"])}}

    {{Form::label('league','Title:')}}
    {{Form::text('league',null,['class' => 'form-control'])}}

    {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}

    {{Form::close()}}

@endsection