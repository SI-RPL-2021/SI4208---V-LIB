<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootsrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/vlib.png') }}" rel="icon" type="image/png">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="navbar-nav">
                    <li style="margin-left: 0px;" class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    
                </ul>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                        <li style="margin-right: 0px; margin-left: 0px;" class="nav-item">
                            <a class="nav-link" href="/catalog">Catalog</a>
                        </li>
                        <li style="margin-right: 0px;" class="nav-item">
                            <a class="nav-link" href="#">Publication</a>
                        </li>
                        <li style="margin-right: 0px;" class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <div class="jumbotron" style="background-color: #1cc88a; margin-bottom:0; margin-top:100px;">
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-10">
                <h4><a href="" class="text-white">Home</a></h4>
                <h4><a href="" class="text-white">About Us</a></h4>
            </div>
            <div class="col-sm-2">
                <center><td colspan="3"><h4 class="text-white">Contact</h4></td>
                        <table>
                        <tr>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="{{asset('img/igc.png')}}"></a></td>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="{{asset('img/tw.png')}}"></a></td>
                            <td><a href=""><img style="width: 30px; margin-right: 10px;" src="{{asset('img/fb.png')}}"></a></td>
                        </tr>
                        </table>
                </center>
            </div>
        </div>
        <hr style="border: 2px solid #fafafa; border-radius: 5px;">
        <div class="row">
            <div class="col-sm-9">
                <h6 class="text-white">© Virtual Library</h6>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-6">
                        <a style="text-align: right;" class="text-white" href="">Privacy Policy</a>
                    </div>
                    <div class="col-sm-6">
                        <a style="text-align: right;" class="text-white" href="">Terms & Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
