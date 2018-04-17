<div class="modal fade" id="registerModaltest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create New Account</h4>
            </div>
            <div class="modal-body" style="">
                {!! Form::open( array( 'url'=>'registerUser', 'method' => 'POST' ) ) !!}
                    <div class="form-group">
                        <label for="register-email">First Name</label>
                        <small class="{{ $errors->has('first_name') ? ' text-danger' : '' }}">{{ $errors->first('first_name') }}</small>
                        {!! Form::text( 'first_name', null, array( 'class' => 'form-control','placeholder' => 'Enter First name' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="register-email">Last Name</label>
                        <small class="{{ $errors->has('last_name') ? ' text-danger' : '' }}">{{ $errors->first('last_name') }}</small>
                        {!! Form::text( 'last_name', null, array( 'class' => 'form-control','placeholder' => 'Enter Last name' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="register-email">Profession</label>
                        <small class="{{ $errors->has('profession') ? ' text-danger' : '' }}">{{ $errors->first('profession') }}</small>
                        {!! Form::text( 'profession', null, array( 'class' => 'form-control','placeholder' => 'Enter your Profession' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="register-email">National Document ID Number</label>
                        <small class="{{ $errors->has('dni') ? ' text-danger' : '' }}">{{ $errors->first('dni') }}</small>
                        {!! Form::text( 'dni', null, array( 'class' => 'form-control','placeholder' => 'Enter your National Document ID Number' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="register-email">National social security number</label>
                        <small class="{{ $errors->has('cuil') ? ' text-danger' : '' }}">{{ $errors->first('cuil') }}</small>
                        {!! Form::text( 'cuil', null, array( 'class' => 'form-control','placeholder' => 'Enter your National social security number' ) ) !!}
                    <div class="form-group">
                        <label for="register-email">Email Address</label>
                        <small class="{{ $errors->has('email') ? ' text-danger' : '' }}">{{ $errors->first('email') }}</small>
                        {!! Form::text( 'email', null, array( 'class' => 'form-control','placeholder' => 'Enter your Email' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="register-email">Password</label>
                        <small class="{{ $errors->has('password') ? ' text-danger' : '' }}">{{ $errors->first('password') }}</small>
                        {!! Form::password( 'password', array( 'class' => 'form-control','placeholder' => 'Enter Password' ) ) !!}
                    </div>
                    <div class="form-group">
                        <label for="register-email">Re-type your password</label>
                        <small class="{{ $errors->has('password_confirmation') ? ' text-danger' : '' }}">{{ $errors->first('password_confirmation') }}</small>
                        {!! Form::password( 'password_confirmation',  array( 'class' => 'form-control','placeholder' => 'Enter Confirm Password' ) ) !!}
                    </div>
                {!! Form::submit( 'Submit', array( 'class'=>'btn btn-primary' ) ) !!}
                {!! Form::close() !!}
                <!--<small>Already have an account? </small><a href="#" class="login_modal" >Login </a>-->
            </div>
        </div>
    </div>

</div>
