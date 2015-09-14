@extends("master")

@section('title','SmolyanCup')

@section('content')

<section id="title" class="emerald">
   <div class="container">
      <div class="row">
         <div class="col-sm-10">
            <p></p>
            <h1>
            {{$team->name}} 
            <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
               -->
         </div>
      </div>
   </div>
</section>
<!--/#title--> 
<div class="container">
   <div class="row">
      <div class="col-sm-6">
        <h2>Информация</h2>
        <div class="row">
        	<div class="col-sm-6">
        		<p>Email</p>
        	</div>
        	<div class="col-sm-6">
        		<p>{{$team->email}}</p>
        	</div>
        </div>
        <div class="row">
        	<div class="col-sm-6">
        		<p>Телефон</p>
        	</div>
        	<div class="col-sm-6">
        		<p>{{$team->phone}}</p>
        	</div>
        </div>
        <hr />
        <div class="row">
        	<h4 class='center'>Група</h4>
        	<div class="col-sm-12">
        		<p> Скоро ...</p>
        	</div>
        	
        </div>
        <div class="row">
        	<h4 class='center'>Програма</h4>
        	<div class="col-sm-12">
        		<p> Скоро ...</p>
        	</div>
        	
        </div>
      </div>
      <div class="col-sm-6">
         <ul class="list-group">
         	<h2>Състав</h2>
            @foreach($players as $player)
            <li class="list-group-item">{{$player->name}}</li>
            @endforeach
         </ul>
      </div>
   </div>
</div>

	

@stop

