<ul class="nav nav-pills nav-stacked">
	@foreach($teams as $team)
	
	<li><a href="{{url('/teams',$team->slug)}}">{{$team->name}}</a></li>
		
	@endforeach
</ul>