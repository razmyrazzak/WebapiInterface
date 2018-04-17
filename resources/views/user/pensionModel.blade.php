<div class="modal fade" id="pensionModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update your profile ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open( array( 'url'=>'generatePension', 'method' => 'GET' ) ) !!}
                 <div class="form-group">
                    <label for="exampleInputName">AFTP password</label>
                    <small class="{{ $errors->has('aftp') ? ' text-danger' : '' }}">{{ $errors->first('aftp') }}</small>
                  {!! Form::text( 'aftp', null, array( 'class' => 'form-control','placeholder' => 'Enter AFTP password' ) ) !!}
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



