@extends('user.master')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card-header">
                        <i class="fa fa-fw fa-user"></i>Update User
                    </div>
                    <div class="card-body">
                        {!! Form::open( array( 'url'=>'editUser', 'method' => 'POST' ) ) !!}
                        <label for="exampleInputName">First name</label>
                        <small class="{{ $errors->has('first_name') ? ' text-danger' : '' }}">{{ $errors->first('first_name') }}</small>
                        {!! Form::text( 'first_name', $user->first_name, array( 'class' => 'form-control','placeholder' => 'Enter first name' ) ) !!}
                        <label for="exampleInputLastName">Last name</label>
                        <small class="{{ $errors->has('last_name') ? ' text-danger' : '' }}">{{ $errors->first('last_name') }}</small>
                        {!! Form::text( 'last_name', $user->last_name, array( 'class' => 'form-control','placeholder' => 'Enter Last name' ) ) !!}

                        <label for="exampleInputName">Dni</label>
                        <small class="{{ $errors->has('dni') ? ' text-danger' : '' }}">{{ $errors->first('dni') }}</small>
                        {!! Form::text( 'dni', $user->dni , array( 'class' => 'form-control','placeholder' => 'Enter Dni' ) ) !!}


                        <label for="exampleInputLastName">Cuil</label>
                        <small class="{{ $errors->has('cuil') ? ' text-danger' : '' }}">{{ $errors->first('cuil') }}</small>
                        {!! Form::text( 'cuil', $user->cuil, array( 'class' => 'form-control','placeholder' => 'Enter Cuil' ) ) !!}



                        <label for="exampleInputEmail1">Email address</label>
                        <small class="{{ $errors->has('email') ? ' text-danger' : '' }}">{{ $errors->first('email') }}</small>
                        {!! Form::text( 'email', $user->email , array( 'class' => 'form-control','placeholder' => 'Enter email' ) ) !!}


                        <label for="exampleInputEmail1">Profession</label>
                        <small class="{{ $errors->has('profession') ? ' text-danger' : '' }}">{{ $errors->first('profession') }}</small>
                        {!! Form::text( 'profession', $user->profession , array( 'class' => 'form-control','placeholder' => 'Enter Profession' ) ) !!}

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            {!! Form::submit( 'Submit', array( 'class'=>'btn btn-primary' ) ) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>


        </div>

    </div>
@endsection