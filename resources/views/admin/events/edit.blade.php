@extends('main')
@section('content')

    <div class="col-md-8 offset-md-2">
        {{Form::model($event , ['route' => ['events.update',$event->id],'method' => "PUT"])}}

        {{Form::label('name','Name:')}}
        {{Form::text('name',null,['class' => 'form-control'])}}
        {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}

        {{Form::close()}}
    </div>


@endsection