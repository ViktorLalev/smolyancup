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
		<div class="row">
                <div class="col-sm-10">
           @include('partials.teamList') 
        </div>  
        </div>  
        </div>  
	
	
	
	
@stop

