<div class="modal fade" id="careerContactModal" tabindex="-1" role="dialog" aria-labelledby="careerContactModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="careerContactModal">Add Career Contact Email</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'CareerContactController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        {!! Form::text('mail_driver', null, ['class'=>'form-control', 'placeholder'=>'Add Mail Driver', 'id'=>'mail_driver']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('mail_host', null, ['class'=>'form-control', 'placeholder'=>'Add Mail HOST', 'id'=>'mail_host']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('mail_port', null, ['class'=>'form-control', 'placeholder'=>'Add Mail PORT', 'id'=>'mail_port']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('mail_username', null, ['class'=>'form-control', 'placeholder'=>'Add Mail Username', 'id'=>'mail_username']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('mail_password', null, ['class'=>'form-control', 'placeholder'=>'Add Mail Password', 'id'=>'mail_password']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('mail_encryption', null, ['class'=>'form-control', 'placeholder'=>'Add Mail Encryption', 'id'=>'mail_encryption']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Career Email</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
