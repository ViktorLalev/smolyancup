@extends("master")

@section('content')
<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                	<p></p>
                    <h1>Регистрирани отбори - {{count($teams)}}</h1>
                    
                   <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
               -->
                </div>
                
            </div>
        </div>
    </section><!--/#title-->  
    
	<div class="container">

            @foreach ($teams->chunk(round(count($teams) / 2)) as $chunk)
                <ul class="list-group col-sm-6 " style="padding-top:20px">
                    
                    @foreach ($chunk as $team)
                        <li class="list-group-item">
                            <a href="{{url('/teams',$team['slug'])}}">
                                <h4>{{ $team['name'] }}</h4>   
                            </a>
                        </li>

                    @endforeach
                </ul>
            @endforeach

{{-- 		<div class="row">
           @include('theme.partial.teamsList') 
        </div>  
 --}}    </div>  
	
	
	
	
@stop

