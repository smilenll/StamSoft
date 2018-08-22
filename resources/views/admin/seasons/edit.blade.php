@extends('main')
@section('content')

    <div class="col-md-8 offset-md-2">
        {{Form::model($season , ['route' => ['seasons.update',$season->id],'method' => "PUT"])}}

        {{Form::label('season','Season:')}}
        {{Form::text('season',null,['class' => 'form-control'])}}
        {{Form::submit('save Changes',['class' => 'btn btn-success btn-h1'])}}

        {{Form::close()}}
    </div>


@endsection