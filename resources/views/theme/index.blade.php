@extends("master")

@section('title','SmolaynCup')

@section('main-slider')

<section class="section-fw section-css-parallax no-content text-light space-bottom-3x" style="background-image:url(http://the8guild.com/themes/html/creativebundle/triumph/img/homepage/corporate/static-image/01.jpg);">
</section>

@section('content')
       <div class="container">
            
        </div>        
       <div class="container">
            <div class="row"> 
                   <div class="col-md-7">
                    <h2>Какво е SmolyanCup</h2>
                    <p>Аматьорски турнир по футбол.Събраните средства от таксите на участниците и даренията на зрителите ще бъдат предоставени на нуждаещи се.</p>
                   </div>
                   <div class="col-md-5">
                    <div>
                        <img src="{{url('images/sc/aboutus.jpg')}}">
                    </div>
                   </div>
            </div>
            <hr />
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
                </div>
            </div>
       </div>
@stop
