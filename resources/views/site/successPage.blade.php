@extends('site.master')
@section('content')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('images/logo/logo.png')}}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#calculate-pension">Calculate Pension</a></li>
                    <li><a href="#our-service">Price</a></li>
                    <li><a href="#our-clients">Happy Clients</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#about-us">About Us</a></li>
                    <li><a href="{{ URL::to('loginShow') }}">Login</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#registerModal">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @include('site.home')
    @include('site.calculatePension')
    @include('site.ourService')
    @include('site.ourClients')
    @include('site.faq')
    @include('site.aboutUs')
    @include('site.footer')
    @include('site.registerMpdel')

    @include('site.footer')
    @include('site.registerMpdel')

@endsection