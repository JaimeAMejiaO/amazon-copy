<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* Estilo inicial para el reCAPTCHA flotante */
.sticky-card {
    position: sticky;
    top: 10px; /* Ajusta esta propiedad según tu necesidad */
}

#captcha {
    position: fixed;
    bottom: 0;
    left:100px;
    width: 100%;
    z-index: 1000;
    padding: 10px;
    transition: position 0.3s ease, bottom 0.3s ease;
}

        .cart-button {
            position: relative;
        }

        .cart-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="app">
        @include('layouts.header')
        <div class="">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
