<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('public/fontend/images/favicon.ico')}}" type="image/ico" />

    <title>@yield('title')</title>

    <link href="{{asset('public/fontend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/fontend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/fontend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <link href="{{asset('public/fontend/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('public/fontend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('public/fontend/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('public/fontend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/fontend/build/css/custom.min.css')}}" rel="stylesheet">

</head>
<body class="nav-md">
    <div class="container body">
       <div class="main_container">
            @include('layout.taskbar')
            @include('layout.header')
            @yield('content')

       </div>
    </div>
    @include('layout.footer')
<!-- jQuery -->
<script src="{{asset('public/fontend/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/fontend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('public/fontend/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('public/fontend/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('public/fontend/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('public/fontend/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('public/fontend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('public/fontend/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('public/fontend/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('public/fontend/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('public/fontend/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('public/fontend/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('public/fontend/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('public/fontend/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('public/fontend/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('public/fontend/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('public/fontend/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('public/fontend/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/fontend/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('public/fontend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('public/fontend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('public/fontend/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('public/fontend/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('public/fontend/build/js/custom.min.js')}}"></script>

<!-- font -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</body>
</html>
