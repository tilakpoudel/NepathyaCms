<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <div class="container" style="margin-top:1%">
            <div class="row">
                @if(Auth::check())
                <div class="col-lg-3">
                    <ul class="list-group">  
                        <li class="list-group-item">
                        <a href="{{route('home')}}">DashBoard </a>
                        </li>

                        <li class="list-group-item">
                            <strong><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menus</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('mainmenu.create')}}">Create</a>
                            <a class="dropdown-item" href="{{route('mainmenu.view')}}">View</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">....</a>
                            </div>
                            </strong>
                          </li>

                        <li class="list-group-item">
                            <strong><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SubMenus</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('submenu.create')}}">Create</a>
                            <a class="dropdown-item" href="{{route('submenu.view')}}">View</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">....</a>
                            </div>
                            </strong>
                          </li>
                          {{-- <li class="list-group-item">
                            <strong><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Test</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('test.create')}}">Create</a>
                            <a class="dropdown-item" href="#">View</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">....</a>
                            </div>
                            </strong>
                          </li> --}}
                    </ul>
                </div>
                @endif
                <div class="col-lg-9">
                    @yield('content')
                </div>
            </div>
        </div>


        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    </div>

    <script src="{{ asset('jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"> -->

    <script type="text/javascript">


      @if(Session::has('success'))
      //alert("{{Session::get('success')}}");
        toastr.success('{{Session::get('success')}}');
      @endif

      @if(Session::has('info'))
      toastr.info('{{Session::get('info')}}');

      @endif
    </script>


</body>
</html>
