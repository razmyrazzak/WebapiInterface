<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update your profile ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open( array( 'url'=>'editUser', 'method' => 'GET' ) ) !!}
                 <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputName">First name</label>
                        <small class="{{ $errors->has('first_name') ? ' text-danger' : '' }}">{{ $errors->first('first_name') }}</small>
                        {!! Form::text( 'first_name', $user->first_name, array( 'class' => 'form-control','placeholder' => 'Enter first name' ) ) !!}
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputLastName">Last name</label>
                        <small class="{{ $errors->has('last_name') ? ' text-danger' : '' }}">{{ $errors->first('last_name') }}</small>
                        {!! Form::text( 'last_name', $user->last_name, array( 'class' => 'form-control','placeholder' => 'Enter Last name' ) ) !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="exampleInputName">Dni</label>
                        <small class="{{ $errors->has('dni') ? ' text-danger' : '' }}">{{ $errors->first('dni') }}</small>
                        {!! Form::text( 'dni', $user->dni , array( 'class' => 'form-control','placeholder' => 'Enter Dni' ) ) !!}
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputLastName">Cuil</label>
                        <small class="{{ $errors->has('cuil') ? ' text-danger' : '' }}">{{ $errors->first('cuil') }}</small>
                        {!! Form::text( 'cuil', $user->cuil, array( 'class' => 'form-control','placeholder' => 'Enter Cuil' ) ) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <small class="{{ $errors->has('email') ? ' text-danger' : '' }}">{{ $errors->first('email') }}</small>
                    {!! Form::text( 'email', $user->email , array( 'class' => 'form-control','placeholder' => 'Enter email' ) ) !!}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Profession</label>
                    <small class="{{ $errors->has('profession') ? ' text-danger' : '' }}">{{ $errors->first('profession') }}</small>
                    {!! Form::text( 'profession', $user->profession , array( 'class' => 'form-control','placeholder' => 'Enter Profession' ) ) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                {!! Form::submit( 'Submit', array( 'class'=>'btn btn-primary' ) ) !!}
                {!! Form::close() !!}
            </div>
            </div>

        </div>
</div>


<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">Sign up</button>
            </div>
        </div>
    </div>
</div>


