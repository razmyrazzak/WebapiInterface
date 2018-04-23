@extends('user.master')
@section('content')
    <div class="container-fluid">
        <div class="container">
            @if (session('status'))
                <div id="success" class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div id="success" class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card-header">
                        <i class="fa fa-fw fa-user"></i>Update Password
                    </div>
                    <div class="card-body">
                        {!! Form::open( array( 'url'=>'updatePassword', 'method' => 'POST' ) ) !!}
                        <label for="exampleInputName">Current Password</label>
                        <small class="{{ $errors->has('current_password') ? ' text-danger' : '' }}">{{ $errors->first('current_password') }}</small>
                        {!! Form::password( 'current_password', array( 'class' => 'form-control','placeholder' => 'Enter Current Password' ) ) !!}
                        <label for="exampleInputLastName">New Password</label>
                        <small class="{{ $errors->has('password') ? ' text-danger' : '' }}">{{ $errors->first('password') }}</small>
                        {!! Form::password( 'password', array( 'class' => 'form-control','placeholder' => 'Enter New Password' ) ) !!}

                        <label for="exampleInputName">Confirm Password</label>
                        <small class="{{ $errors->has('password_confirmation') ? ' text-danger' : '' }}">{{ $errors->first('password_confirmation') }}</small>
                        {!! Form::password( 'password_confirmation', array( 'class' => 'form-control','placeholder' => 'Enter Confirm Password' ) ) !!}

                        <div class="modal-footer">
                            {!! Form::submit( 'Change', array( 'class'=>'btn btn-primary' ) ) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection