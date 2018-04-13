<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Jubilaciones User Dashboard</title>
    <!-- Bootstrap core CSS-->

    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{url('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{url('css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{url('css/custom.css')}}" rel="stylesheet">
    <link rel="icon" href="{{url('front-end/assets/images/header/favicon.png')}}">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
@include('user.nav')

<div class="content-wrapper">
    @yield('content')
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@include('user.footer')
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
@include('user.logoutModal')

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src=" {{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
    <script src=" {{url('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{url('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{url('js/sb-admin.min.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{url('js/sb-admin-datatables.min.js')}}"></script>
</div>
</body>

</html>
