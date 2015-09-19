@extends("master")

@section('title','SmolyanCup')

@section('main-slider')

<header >
<img src="{{url('images/header.png')}}" width='100%'>

</header>

@section('content')
       <div class="container">
            
        </div>        
       <div class="container">
            <div class="row"> 
                   <div class="col-md-7">
                    <h2>Какво е SmolyanCup</h2>
                    <p>Смолян Къп е благотворителен спортен турнир, който се провежда вече 5 години в гр. Смолян. Идеята е докато спортуваме и се забавляваме с приятели да помагаме. За тези 5 години бяха организирани  повече от 20 футболни турнири и дарени повече от 25 000 лв, като участваха повече от 150 футболиста средно във всеки един от турнирите.</p>
                   </div>
                   <div class="col-md-5">
                    <div>
                        <img src="{{url('images/sc/aboutus.jpg')}}">
                    </div>
                   </div>
            </div>
            <hr />
            <div class="container">
<h2>Отбори</h2>
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

{{--    <div class="row">
           @include('theme.partial.teamsList') 
        </div>  
 --}}    </div> 
 <!--
            <div class="row">
                
                <div class="col-md-6 col-sm-6">
                <h2>Отбори</h2>
                @include('theme.partial.teamsList')
                </div>
                <div class="col-md-6 col-sm-6">
                  <h2 class='center'>Регистрирай отбор</h2>
                <section id="registration" class="container">
            @include('theme.partial.formRegistration')
        
        </section><!--/#registration-->
<!--
                <h2 class='center'>Регистрирай отбор</h2>
                <section id="registration" class="container">
            @include('theme.partial.formRegistration')
        
        </section><!--/#registration-->
                </div>
            </div>
       </div>
@stop
