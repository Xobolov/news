<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>News</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/fontawesome/all.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- MDB CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/mdb/css/mdb.min.css')}}">
    <!-- MDB Flag icons -->
    <link href="css/addons/flag.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/web/css/style.css')}}">

    @yield('css')
</head>
<body>

    <!-- Header -->
    @include('web.includes.header')
    <!-- Header -->

    <!-- Main layout -->
    <main>
        <!-- Content -->
        @yield('content')
        <!-- Content -->
    </main>
    <!-- Main layout -->

    <!-- Footer -->
    @include('web.includes.footer')
    <!-- Footer -->

    <!-- SCRIPTS -->
    <script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('vendor/popper.js/popper.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/mdb/js/mdb.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('custom/web/js/custom.js')}}" ></script>

    @yield('script')

</body>
</html>
