<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', '') }}</title>

  <!--_______________________________________________________________________ -->
  <!-- Scripts -->
  <script src="{{ asset('js/adminlte/jquery.min.js') }}" defer></script>
  <script src="{{ asset('js/adminlte/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('js/adminlte/adminlte.min.js') }}" defer></script>
  <!-- <script src="{{ asset('js/adminlte/demo.js') }}" defer></script> -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Fonts -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <!-- <link href="{{ asset('fonts/adminlte/all.min.css') }}" rel="stylesheet"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/adminlte/adminlte.min.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <!--_______________________________________________________________________ -->
</head>

<body class="control-sidebar-slide-open sidebar-mini layout-fixed sidebar-collapse layout-navbar-fixed dark-mode">
  <div class="wrapper">

    <!-- Navbar -->
    @include('layouts.navbar')
    

    <!-- Main Sidebar Container -->
    @include('layouts.sidebar')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <div class="content-header">
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <main class="py-4">
          @yield('content')
        </main>
      </div>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark">
       Control sidebar content goes here 
    </aside> -->
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('layouts.footer')
    
  </div>
  <!-- ./wrapper -->
</body>

</html>