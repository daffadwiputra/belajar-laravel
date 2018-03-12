<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>@yield('title')</title>
</head>
<body>
    <div class = "container">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/buku') }}">
                    <img src="https://pbs.twimg.com/media/CmkmF38WYAEZ_Xd.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Love Live
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
    {{--  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/buku">
            <img src="https://pbs.twimg.com/media/CmkmF38WYAEZ_Xd.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            Love Live
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/buku">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
                        Products
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Product 1</a>
                        <a class="dropdown-item" href="#">Product 2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Another Product</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li> -->
            </ul>
        </div>
    </nav>  --}}
    
    <div>
        @yield('content')
    </div>
    <hr>
    <br>
    
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Love Live</h5>
                    <p class="card-text text-sm-center text-md-left">
                        Nine high school girls, Honoka Kosaka, Eli Ayase, Kotori Minami, Umi Sonoda, Rin Hoshizora, Maki Nishikino, Nozomi Tojo, Hanayo Koizumi, and Nico Yazawa, form an idol group called μ's (pronounced as 'Muse') in order to save their school, Otonokizaka High School, from closing.
                    </p>
                    <a href="http://love-live.wikia.com/wiki/Love_Live!" class="card-link">See more</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Love Live Sunshine</h5>
                    <p class="card-text text-sm-center text-md-left">
                        Second-year student Chika Takami tries to start her own School Idol Club. Nine high school girls, Chika Takami, Riko Sakurauchi, Kanan Matsuura, Dia Kurosawa, You Watanabe, Yoshiko Tsushima, Hanamaru Kunikida, Mari Ohara, and Ruby Kurosawa, form their own idol group called Aqours.
                    </p>
                    <a href="http://love-live.wikia.com/wiki/Love_Live!_Sunshine!!" class="card-link">See more</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-sm-4 mt-md-0">
        <div class="col-sm-12 col-md-8 text-sm-center text-md-left">
            <h3>Love Live</h3>
            <p class="lead">Best anime of the year, every year.</p>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        
        <div class="col-sm-12 col-md-4">
            <div class="text-center">
                <img src="http://newyork.carpediem.cd/data/afisha/o/9a/c8/9ac85847af.jpg" class="img-fluid rounded" alt="Love Live">
            </div>
            
            <!-- <h3 class="mb-4">Secondary Menu</h3>
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <p class="text-center font-weight-light">
            Copyright &copy; 2018 Daffa & Love Live
        </p>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>