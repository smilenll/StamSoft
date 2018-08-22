@extends('main')

@section('content')

    <div class="col-md-8">
        <h1>{{ $team->name }}</h1>

        <p class="lead">{{ $team->logo }}</p>

        <hr>
        <div class="players">
            <h3>Team players</h3>
            <ul class="list-group">
                @foreach($team->players as $player)
                    <li class="list-group-item"><a href="#">{{$player->name}}</a></li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>League:</dt>
                <dd>{{$team->league->name}}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Create At:</dt>
                <dd>{{date('M j, Y H:i',strtotime($team->created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Last Updated:</dt>

                <dd>{{date('M j, Y H:i',strtotime($team->update_at)) }}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('teams.edit','Edit',array($team->id), array('class'=>"btn btn-primary btn-block")) !!}

                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['teams.destroy', $team->id],'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete',['class' => 'btn btn-danger btn-block ']) !!}
                    {!! Form::close() !!}
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <br>
                    {{Html::linkRoute('teams.index', '<<See All Posts',[], ['class'=>'btn btn-default btn-block btn-h1-spacing'])}}
                </div>
            </div>

        </div>
    </div>



@endsection