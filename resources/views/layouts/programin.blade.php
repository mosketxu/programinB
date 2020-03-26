<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css')}}">
    <!-- Styles original laravel-->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <!-- Theme style -->
    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link href="{{ asset('css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">

    {{-- <title>{{ config('app.name', 'Programin') }}</title> --}}
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        @yield('navbar')
        <!-- Main Sidebar Container -->
        @include('layouts.partials.sidebar')
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- Footer -->
        @include('layouts.partials.footer')
        <!-- Control Sidebar -->
        @include('layouts.partials.controlsidebar')
    </div>
    
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('js/moment.min.js')}}"></script>
    <script src="{{ asset('js/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('js/jquery.overlayScrollbars.min.js')}}"></script>

    <!-- Scripts original laravel-->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.js')}}"></script>
    
    @yield('script')
    @stack('scriptchosen')

</body>
</html>
