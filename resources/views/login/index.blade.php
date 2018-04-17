@extends('login.master')
@section('content')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card card-login mx-auto mt-5">

            <div class="card-header">Login</div>
            <div class="card-body">
                {!! Form::open( array( 'url'=>'doLogin' ) ) !!}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        {!! Form::text( 'email', null, array( 'class' => 'form-control','placeholder' => 'Enter email' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        {!! Form::password( 'password', array( 'class' => 'form-control','placeholder' => 'Password' ) ) !!}
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember Password</label>
                        </div>
                    </div>
                {!! Form::submit( 'Login', array( 'class'=>'btn btn-primary btn-block' ) ) !!}

                {!! Form::close() !!}
                <div class="text-center">
                    <a class="d-block small mt-3" href="register.html">Register an Account</a>
                    <a class="d-block small" href="{{ URL::to('showRestForm') }}">Forgot Password?</a>
                    <a class="d-block small" href="{{ URL::to('/') }}">Return to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection