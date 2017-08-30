@section('page-content')
<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text">
                    {{ config('app.name', 'NERDY') }}
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{url('/')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>News Feed</p>
                    </a>
                </li>
                <li>
                <!--class="active"-->
                    <a href="{{url('/articles')}}">
                        <i class="pe-7s-folder"></i>
                        <p>Articles</p>
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
        <nav class="navbar navbar-default navbar-fixed">
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
                        <li><a>Question ?</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
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
    </div>
</div>
@endsection
