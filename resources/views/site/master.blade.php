<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jubilaciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="propertypointuk">

    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/YTPlayer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/animated-headlines.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front-end/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('back-end/vendor/bootstrap-toastr/toastr.css')}}">
    <link href="{{url('css/sb-admin.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link rel="icon" href="{{url('front-end/assets/images/header/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{url('front-end/assets/img/template/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('front-end/assets/img/template/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('front-end/assets/img/template/icon-114x114.png')}}">
    {{--<link rel="apple-touch-icon" href="{{ asset('front-end/assets/img/template/apple-touch-icon.png') }}">--}}
    {{--<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('front-end/assets/img/template/icon-72x72.png') }}">--}}
    {{--<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('front-end/assets/img/template/icon-114x114.png') }}">--}}
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- The fav icon -->
    <link rel="shortcut icon" href="">
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">

@yield('content')

<script src="{{url('front-end/assets/js/jquery.min.js')}}"></script>
<script src="{{url('front-end/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js"></script>
<script src="{{url('front-end/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{url('front-end/assets/js/wow.min.js')}}"></script>
<script src="{{url('front-end/assets/js/SmoothScroll.js')}}"></script>
<script src="{{url('front-end/assets/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{url('front-end/assets/js/jquery.inview.min.js')}}"></script>
<script src="{{url('front-end/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('front-end/assets/js/jquery.mixitup.js')}}"></script>
<script src="{{url('front-end/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{url('front-end/assets/js/animated-headlines.js')}}"></script>
<script src="{{url('front-end/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('front-end/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{url('front-end/assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{url('back-end/vendor/bootstrap-toastr/toastr.min.js')}}"></script>
<script src="{{url('back-end/vendor/bootstrap-toastr/toastr.min.js')}}"></script>
<script src="{{url('back-end/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<!-- Custom fonts for this template-->
<link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<!-- Page level plugin CSS-->
<script src="{{url('js/sb-admin.min.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>
<script type="text/javascript">
    $('.video-active').mb_YTPlayer();</script>
<script src="{{url('front-end/assets/js/custom.js')}}"></script>
<script src="{{url('back-end/js/custom.js')}}"></script>
</body>
</html>