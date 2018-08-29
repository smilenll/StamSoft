@extends('main')
@section('content')

        <div class="col-md-8">
            <h1>Events</h1>
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
                @foreach($events as $event)
                    <tr>
                        <th>{{$event->id}}</th>
                        <td><a href="">{{$event->name}}</a></td>
                        <th><a href="{{route('events.edit', $event->id)}}" class="btn btn-primary">Edit</a></th>
                        <th>
                            {!! Form::open(['route' => ['events.destroy', $event->id],'method' => 'DELETE','class'=>'delete']) !!}
                            {!! Form::submit('Delete',['class' => 'btn btn-danger ']) !!}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="col-md-3">
            {!! Form::open(['route' =>'events.store']) !!}
            <h2>New Event</h2>
            {{Form::label('name', 'Name:')}}
            {{Form::text('name', null, ['class' => 'form-control'])}}
            <br>

            {{Form::submit('create new season', ['class' => 'btn btn-success brn-blog'])}}
            {!! Form::close() !!}
        </div>

@endsection