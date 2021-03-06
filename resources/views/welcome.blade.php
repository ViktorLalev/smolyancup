@extends("master")
@section('title','Благотворителен футболен турнир - Smolyan Cup')

@section('header')

   
    <header>
        <div class="container">
           <h1>Header</h1>
        </div>
    </header>

@stop

@section('content')

   
  <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                       
                </div>
            </div>
        </div>
    </section>

    <section id='teams'>
        <h2>Регистрирани отбори</h2>
        @include('partials.teamList')
    </section>

   

@stop

@section('footer')
    
@stop