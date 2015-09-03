@extends("master")

@section('content')

	<h1>Група - {{$group}}</h1>
	<hr>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Отбор</th>
        <th>Победи</th>
        <th>Равенства</th>
        <th>Загуби</th>
        <th>Точки</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($teams as $team)
      <tr>
        <td><a href="{{url('/teams',$team->slug)}}">{{$team->name}}</a></td>
        <td>{{ $team->wins }}</td>
        <td>{{ $team->draws }}</td>
        <td>{{ $team->loses }}</td>
        <td>{{ $team->points }}</td>
      </tr>
      @endforeach
     </tbody>
  </table>

@stop

