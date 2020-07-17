<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/fontawesome/all.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- MDB CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/mdb/css/mdb.min.css')}}">
    <!-- Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/panel/css/style.css')}}">
    @yield('css')
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- Header -->
  @include('panel.includes.header')
  <!-- Header -->

  <!-- Main layout -->
  <main>
      @yield('content')
  </main>
  <!-- Main layout -->

  <!-- Footer -->
@include('panel.includes.footer')
  <!-- Footer -->

  <!-- SCRIPTS -->

  <!-- SCRIPTS -->
  <script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}" ></script>
  <script type="text/javascript" src="{{asset('vendor/popper.js/popper.min.js')}}" ></script>
  <script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendor/mdb/js/mdb.min.js')}}" ></script>
  <script type="text/javascript" src="{{asset('custom/panel/js/custom.js')}}" ></script>

  @yield('script')

</body>

</html>
