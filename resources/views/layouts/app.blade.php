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
    @vite(['resources/js/sb-forms-latest.js','resources/js/buscador.js'])

</head>
<body>

    <div id="app">
        @include('layouts.nav')
        @include('layouts.modal.modal-buscador')
        @yield('content')
    </div>
</body>
</html>
