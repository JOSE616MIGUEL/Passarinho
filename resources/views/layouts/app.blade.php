<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Passarinho</title>
    <link href="{{ asset('img/logo-passarinho.png') }}" rel="icon">
    <!-- Scripts -->
  
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.bundle.min.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
          <!-- ============= COMPONENT ============== -->
    <nav id="navbar_top" class="navbar navbar-expand-xl bg-body-dark">
        <div class="container-xxl">
            <a id="navbar-brand" class="navbar-brand" href="{{ route('Destacado') }}"><img class="img-logo" src="{{ asset('img/logo-passarinho.png') }}" alt=""
                    width="38px" height="40px">Passarinho</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="img/menu.png" alt="" width="30px" height="30px"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('Destacado') }}"> Destacado </a></li>
                    <li class="nav-item"><a class="nav-link" href="quienes-somos.html"> Quienes somos </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Nuestros Tours </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#"> Chile</a></li>
                            <li><a class="dropdown-item" href="#"> Miami </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> City 5 Places </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#"> Chile</a></li>
                            <li><a class="dropdown-item" href="#"> Miami </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Hospedaje </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#"> Chile</a></li>
                            <li><a class="dropdown-item" href="#"> Miami </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </form>
            @guest
                @if (Route::has('login'))
                        <a class="btn btn-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
            
                        <a class="btn btn-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
               
                @endif
            @else
       
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
    
            @endguest

            </div>
            <!-- navbar-collapse.// -->
        </div>
        <!-- container-fluid.// -->
    </nav>
       
    @yield('content')
</div>
</body>
</html>
