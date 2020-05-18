<div class="modal fade" id="diversityIconModal" tabindex="-1" role="dialog" aria-labelledby="diversityIconModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="diversityIconModal">Add About Diversity Icon</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'AboutDiversityIconController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::select('story_id', array(''=>'Choose Type') + $story, null, ['class'=>'form-control', 'id'=>'story_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('story_id', array(''=>'Choose Type') + $story, null, ['class'=>'form-control', 'id'=>'story_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Create Title', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Title Ar', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('icon', null, ['class'=>'form-control', 'placeholder'=>'Add Icon', 'id'=>'icon']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add About Diversity Icon</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
