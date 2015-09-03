@extends("master")

@section('content')

	<h1>Schedule</h1>
	<hr>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>№</th>
        <th>Домакин</th>
        <th>Резултат</th>
        <th>Резултат</th>
        <th>Гост</th>
        <th>Група</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($rows as $row)

      <tr>
      	<td>0</td>
        <td><a href="{{url('/teams',$row['host']->slug)}}">{{$row['host']->name}}</a></td>
        <td>0</td>
        <td>0</td>
        <td><a href="{{url('/teams',$row['guest']->slug)}}">{{$row['guest']->name}}</a></td>
        <td><a href="{{url('/groups',$row['host']->group)}}">{{$row['host']->group}}</a></td>
      </tr>
      @endforeach
     </tbody>
  </table>

@stop

