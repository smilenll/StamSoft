@extends('main')
@section('content')

    <div class="col-md-8 offset-md-2">
        {{Form::model($player , ['route' => ['players.update',$player->id],'method' => "PUT"])}}

        {{Form::label('name','Name:')}}
        {{Form::text('name',null,['class' => 'form-control'])}}

        {{Form::label('picture','Picture:')}}
        {{Form::text('picture',null,['class' => 'form-control'])}}

        {{Form::label('position','Position:')}}
        {{Form::text('position',null,['class' => 'form-control'])}}

        {{Form::label('nationality','Nationality:')}}
        {{Form::text('nationality',null,['class' => 'form-control'])}}

        {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}

        {{Form::close()}}
    </div>
@endsection