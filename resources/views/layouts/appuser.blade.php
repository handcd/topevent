<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo_wit.png" />
	<link rel="icon" type="image/png" href="assets/img/logo_wit.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ config('app.name', 'WIT') }}</title>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
	<link rel="shortcut icon" type="image/png" href="{{ URL::asset('assets/img/logo_wit.png') }}"/>

    <!-- Bootstrap core CSS     -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{ URL::asset('assets/css/material-dashboard.css') }}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ URL::asset('assets/css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!--   Core JS Files   -->
	<script src="{{URL::asset('assets/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/js/material.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ URL::asset('assets/js/chartist.min.js')}}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{ URL::asset('assets/js/bootstrap-notify.js') }}"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{ URL::asset('assets/js/material-dashboard.js') }}"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ URL::asset('assets/js/demo.js') }}"></script>
	
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="blue" data-image="{{URL::asset('assets/img/sidebar-1.jpg')}}">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="{{ url('/') }}" class="simple-text">					
					<img src="{{ URL::asset('assets/img/logo_wit.png') }}" style="width: 160px;" alt="{{ config('app.name', 'WIT') }}">
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li {{ Request::path() == 'dashboard' ? ' class=active' : 'no' }}>
	                    <a href="{{ url('/dashboard') }}">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li {{ Request::path() == 'clientes' ? ' class=active' : '' }}>
	                    <a href="{{ url('/clientes') }}">
	                        <i class="fa fa-user" aria-hidden="true"></i>
	                        <p>Clientes</p>
	                    </a>
	                </li>
	                <li {{ Request::path() == 'ordenes' ? ' class=active' : '' }}>
	                    <a href="{{ url('/ordenes') }}">
	                        <i class="fa fa-list-ul" aria-hidden="true"></i>
	                        <p>Ordenes</p>
	                    </a>
	                </li>
	                <li {{ Request::path() == 'productos' ? ' class=active' : '' }}>
	                    <a href="{{ url('/productos') }}">
	                        <i class="fa fa-cutlery" aria-hidden="true"></i>
	                        <p>Productos</p>
	                    </a>
	                </li>
	                <li {{ Request::path() == 'social' ? ' class=active' : '' }}>
	                    <a href="{{ url('/social') }}">
	                        <i class="material-icons">share</i>
	                        <p>Redes Sociales</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
		</div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{ url('/social') }}">Whatever It Takes - CMR</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 								<i class="material-icons">person</i>
	 								<p class="hidden-lg hidden-md">{{ Auth::user()->name }}</p>
	 						   	</a>
	 						   	<ul class="dropdown-menu">
									<li>
										<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
							  	</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                @yield('content')
	            </div>
	        </div>
			<footer class="footer">
	            <div class="container-fluid">
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> Hecho con <i class="fa fa-heart" aria-hidden="true"></i> por <a href="http://handcreativedesign.com.mx">HAND Creative Design</a>
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>

</body>
<script type="text/javascript">
	$(document).ready(function(){

		// Javascript method's body can be found in assets/js/demos.js
    	demo.initDashboardPageCharts();

	});
</script>
</html>
