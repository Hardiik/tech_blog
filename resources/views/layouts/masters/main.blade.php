<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ config('app.name', 'Tech Blog') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/Commentbox.css" rel="stylesheet"/>
    <link href="css/postcss.css" rel="stylesheet"/>
    <link href="assets/css/Commentbox.css" rel="stylesheet"/>
    <link href="css/sweetalert.css" rel="stylesheet"/>
    <link href="css/card.css" rel="stylesheet"/>
   
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
    

    <!--  CSS for Demo Purpose, don't include it in your project     -->
       <!--<link href="assets/css/demo.css" rel="stylesheet" />    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">



    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
 
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{url('/')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Discussion Forum</p>
                    </a>
                </li>
               
                <li>
                    <a href="{{url('/about')}}">
                        <i class="pe-7s-user"></i>
                        <p>Know your Friend</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Welcome To NERDY</a>
                </div>
                <div class="collapse navbar-collapse">
                 
                    <ul class="nav navbar-nav navbar-right">
                         @if (Auth::guest())
                        <li><a href="{{url('/MemberArea')}}" >Member Area</a></li>  
                        @else
                        <li><a href="{{url('/Question')}}">Question ?</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                
                            </li>
                        @endif
                    </ul>                             
                		<li class="separator hidden-lg hidden-md"></li>

                    </ul>
                </div>
            </div>
        </nav>
</body>


	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    @include('flashy::message')

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script type="text/javascript">
    @if(notify()->ready())
          swal({
                     title:"{{notify()->message()}}",
                     type:"{{notify()->type()}}",

                   @if(notify()->option('timer'))
                      timer:"{{ notify()->option('timer') }}",
                      showConfirmButton:false,
                   @endif
                     html:true
  
          });
    
    
    @endif
    </script>
	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>
	<!--<script src="assets/js/modaljs.js"></script>-->

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
