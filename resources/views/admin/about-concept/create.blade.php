<div class="modal fade" id="aboutConceptModal" tabindex="-1" role="dialog" aria-labelledby="aboutConceptModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="aboutConceptModal">Add About Concept</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'AboutConceptController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        {!! Form::text('icon', null, ['class'=>'form-control', 'placeholder'=>'Create ICON', 'id'=>'icon']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Create Title', 'id'=>'head_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Title Ar', 'id'=>'head_title']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Create Description', 'id'=>'mymce']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::textarea('description_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Description Ar', 'id'=>'mymce']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add About Concept</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
