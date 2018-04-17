@extends('activation.master')
@section('content')
    @include('activation.nav')
    <div class="confirmation-msg">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    {!! Form::open( array( 'url'=>'doReset' ) ) !!}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <small class="{{ $errors->has('email') ? ' text-danger' : '' }}">{{ $errors->first('email') }}</small>
                        {!! Form::text( 'email', null, array( 'class' => 'form-control','placeholder' => 'Enter email' ) ) !!}
                    </div>
                    <div class="text-center">
                        {!! Form::submit( 'Reset', array( 'class'=>'btn btn-primary' ) ) !!}
                        {!! Form::close() !!}
                        <a class="btn btn-primary " href="{{ URL::to('loginShow') }}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('site.footer')
@endsection