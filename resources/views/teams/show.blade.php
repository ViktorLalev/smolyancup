@extends("master")

@section('content')
	<h1>{{$team->name}} <a href="{{url('/groups',$team->group)}}"> - Група {{$team->group}}</a></h1>
	<hr>

	<ul class="nav nav-pills nav-stacked">
	@foreach($players as $player)
		<li>{{$player->name}}</li>
		
	@endforeach
	</ul>

@stop

