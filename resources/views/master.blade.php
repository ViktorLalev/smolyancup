<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	 <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Smolyan Cup</a>
                 </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/')}}">Начало</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/teams/create')}}">Регистрация</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/teams')}}">Отбори</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/schedule')}}">Програма</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/contacts')}}">Контакти</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	@yield('header')
	<div class="container">

			@yield('content')
	</div>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Donatix 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        
                        <li><a href="https://www.facebook.com/SmolyanCup"><i class="fa fa-facebook"></i></a>
                        </li>
                        
                    </ul>
                </div>
               
            </div>
        </div>
    </footer>
	@yield('footer')
</body>
</html>