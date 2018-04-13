<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jubilaciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{url('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{url('css/sb-admin.css')}}" rel="stylesheet">
    <link rel="icon" href="{{url('front-end/assets/images/header/favicon.png')}}">
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- The fav icon -->
    <link rel="shortcut icon" href="">
</head>
<body class="bg-dark">
@yield('content')
<script src="{{ asset("js/jquery-3.1.1.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.min.js") }}"></script>
<script src="{{url('js/sb-admin.min.js')}}"></script>
</body>
</html>