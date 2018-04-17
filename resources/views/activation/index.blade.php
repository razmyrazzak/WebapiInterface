@extends('activation.master')
@section('content')
    @include('activation.nav')
    <div class="confirmation-msg">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Confirmation Message</div>
            <div class="card-body">
                <div class="alert alert-success">your account has been activated </div>

                <div class="text-center">
                    <a class="btn btn-primary " href="{{ URL::to('loginShow') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('site.footer')
@endsection