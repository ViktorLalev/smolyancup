<ul class="list-group" style="padding-top:20px">
	@foreach($teams as $team)
	
    	<li class="list-group-item">
            <a href="{{url('/teams',$team->slug)}}">
                <h4>{{$team->name}}</h4>   
            </a>
        </li>
    		
	@endforeach
</ul>