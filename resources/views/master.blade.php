<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title')</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
    <link href="{{url('css/main.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{url('js/html5shiv.js')}}"></script>
    <script src="{{url('js/respond.min.js')}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{url('images/ico/apple-touch-icon-72-precomposed.png')}}">
    
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('images/logo.png')}}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     @include('theme.partial.nav')
                </ul>
            </div>
        </div>
    </header>
    <section id="main-slider" class="no-margin">
        @yield('main-slider')
    </section><!--/#main-slider-->
    <section id="content" >
        @yield('content')
    </section><!--/#main-slider-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h4>За нас</h4>
                    <p>Смолян Къп е благотворителен спортен турнир, който се провежда вече 5 години в гр. Смолян. Идеята е докато спортуваме и се забавляваме с приятели да помагаме. За тези 5 години бяха организирани  повече от 20 футболни турнири и дарени повече от 25 000 лв, като участваха повече от 150 футболиста средно във всеки един от турнирите.</p>
                    
                </div><!--/.col-md-3-->

                
                <div class="col-md-4 col-sm-4">
                    <h4>Контакти</h4>
                    <address>
                        <strong>Телефон</strong><br>
                        <abbr title="Антоан Шотаров">Мобилен</abbr>:  359 887 656 443
                    </address>
                    
                    
                </div> <!--/.col-md-3-->
                <div class="col-md-4 col-sm-4">
                    <h4>Турнир</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="{{url('/teams')}}">Отбори</a></li>
                            <li><a href="{{url('/groups')}}">Групи</a></li>
                            <li><a href="{{url('/schedule')}}">Програма</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2010-2015 SmolaynCup. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        @include('theme.partial.nav')
                        
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
    @yield('footer')
</body>
</html>