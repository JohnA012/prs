<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!----===== Boxicon CSS ===== -->
    <link rel="stylesheet" href="{{ asset('assets/boxicons-2.1.4/css/boxicons.min.css') }}">

    <!----===== Tabulator CSS ===== -->
    <link rel="stylesheet" href="{{ asset('assets/tabulator-tables/dist/css/tabulator_bootstrap5.min.css') }}">

    <!----===== SELECT2 CSS ===== -->
    <link rel="stylesheet" href="{{ asset('assets/select2/dist/css/select2.min.css') }}">

    <!----===== TOAST CSS ===== -->
    <link rel="stylesheet" href="{{ asset('assets/toast/css/izitoast.min.css') }}">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- SWAL SCRIPTS -->
    <link rel="stylesheet" src="{{ asset('assets/sweetalert2/dist/sweetalert2.min.css') }}">

    <script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
    
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-primary">
    <div id="app">
        @include('layouts.sidebar')
        @include('layouts.navbar')
    </div>

    <!-- JQUERY CDN -->
    <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" defer></script>
    
    <!-- Tabulator JS Scripts -->
    <script src="{{ asset('assets/tabulator-tables/dist/js/tabulator.min.js') }}"></script>

    <!-- SELECT2 JS SCRIPTS -->
    <script src="{{ asset('assets/select2/dist/js/select2.min.js') }}"></script>

    <!-- TOAST JS SCRIPTS -->
    <script src="{{ asset('assets/toast/js/izitoast.min.js') }}"></script>

    <!-- SHEET JS SCRIPTS -->
    <script src="{{ asset('assets/xlsx/dist/xlsx.full.min.js') }}"></script>

    <!-- SWAL SCRIPTS -->
    <script src="{{ asset('assets/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    @livewireScripts
    @stack('scripts')
</body>
</html>