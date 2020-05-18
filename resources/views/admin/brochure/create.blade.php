<div class="modal fade" id="brochureModal" tabindex="-1" role="dialog" aria-labelledby="brochureModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="brochureModal">Add Brochure</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'BrochuresController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::text('brochure_name', null, ['class'=>'form-control', 'placeholder'=>'Create Brochure Name', 'id'=>'brochure_name']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('brochure_name_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Brochure Name Arabic', 'id'=>'brochure_name']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('filter_id', array(''=>'Choose Category EN') + $filters, null, ['class'=>'form-control', 'id'=>'filter_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('filter_id_ar', array(''=>'Choose Category AR') + $filters, null, ['class'=>'form-control', 'id'=>'filter_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Create Brochure Title', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Brochure Title Arabic', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Brochure</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
