<div class="modal fade" id="homeServiceModal" tabindex="-1" role="dialog" aria-labelledby="homeServiceModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="homeServiceModal">Add Home Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'HomeServiceController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::select('service_id', array(''=>'Choose Type') + $service, null, ['class'=>'form-control', 'id'=>'service_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('service_id', array(''=>'Choose Type') + $service, null, ['class'=>'form-control', 'id'=>'service_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Create Title', 'id'=>'head_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Head Title Ar', 'id'=>'head_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('read_more', null, ['class'=>'form-control', 'placeholder'=>'Create Read More', 'id'=>'read_more']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('read_more_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Read More Ar', 'id'=>'read_more']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Add Description En', 'id'=>'mymce']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::textarea('description_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Description Ar', 'id'=>'mymce']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('read_link', null, ['class'=>'form-control', 'placeholder'=>'Create Read Link', 'id'=>'read_link']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Home Service</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
