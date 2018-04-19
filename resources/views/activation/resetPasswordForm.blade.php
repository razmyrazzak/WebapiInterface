@extends('activation.master')
@section('content')
    @include('activation.nav')
    <div class="confirmation-msg">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    {!! Form::open( array( 'url'=>'doUpdatePassword' ) ) !!}
                    {!! Form::hidden( 'token', $token  ) !!}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <small class="{{ $errors->has('email') ? ' text-danger' : '' }}">{{ $errors->first('email') }}</small>
                        {!! Form::text( 'email', null, array( 'class' => 'form-control','placeholder' => 'Enter email' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <small class="{{ $errors->has('password') ? ' text-danger' : '' }}">{{ $errors->first('password') }}</small>
                        {!! Form::password( 'password', array( 'class' => 'form-control','placeholder' => 'Enter password' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password </label>
                        <small class="{{ $errors->has('password_confirmation') ? ' text-danger' : '' }}">{{ $errors->first('password_confirmation') }}</small>
                        {!! Form::password( 'password_confirmation', array( 'class' => 'form-control','placeholder' => 'Enter password confirmation' ) ) !!}
                    </div>
                    <div class="text-center">
                        {!! Form::submit( 'Submit', array( 'class'=>'btn btn-primary' ) ) !!}
                        {!! Form::close() !!}
                        <a class="btn btn-primary " href="{{ URL::to('loginShow') }}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('site.footer')
@endsection