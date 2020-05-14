<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="emailModal">Add Email Configurations</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'EmailConfigurationController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        {!! Form::text('hr_email', null, ['class'=>'form-control', 'placeholder'=>'Add HR Mail', 'id'=>'hr_email']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('career_email', null, ['class'=>'form-control', 'placeholder'=>'Add Career Mail', 'id'=>'career_email']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('contact_email', null, ['class'=>'form-control', 'placeholder'=>'Add Contact Mail', 'id'=>'contact_email']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('admin_email', null, ['class'=>'form-control', 'placeholder'=>'Add Admin Mail', 'id'=>'admin_email']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Email Configurations</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
