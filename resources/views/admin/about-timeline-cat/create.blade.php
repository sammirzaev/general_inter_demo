<div class="modal fade" id="timelineCatModal" tabindex="-1" role="dialog" aria-labelledby="timelineCatModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="timelineCatModal">Add About Timeline Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'AboutTimelineCatController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::select('story_id', array(''=>'Choose Type') + $story, null, ['class'=>'form-control', 'id'=>'story_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('story_id', array(''=>'Choose Type') + $story, null, ['class'=>'form-control', 'id'=>'story_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('year', null, ['class'=>'form-control', 'placeholder'=>'Create Story Year', 'id'=>'year']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('year_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Story Year Ar', 'id'=>'year']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('date', null, ['class'=>'form-control', 'placeholder'=>'mm/dd/yyyy', 'id'=>'date']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add About Timeline Category</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
