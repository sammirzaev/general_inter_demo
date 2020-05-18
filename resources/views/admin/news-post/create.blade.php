<div class="modal fade" id="newsPostModal" tabindex="-1" role="dialog" aria-labelledby="newsPostModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="newsPostModal">Add News Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'NewsPostController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        {!! Form::select('media_id', array(''=>'Choose Media') + $news_media, null, ['class'=>'form-control', 'id'=>'media_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('cat_id', array(''=>'Choose Type') + $news_cat, null, ['class'=>'form-control', 'id'=>'cat_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('cat_id', array(''=>'Choose Type') + $news_cat, null, ['class'=>'form-control', 'id'=>'cat_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Create Title', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Title Ar', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::label('description', 'Description En') !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Add Description En', 'id'=>'mymce']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::label('description', 'Description Ar') !!}
                        {!! Form::textarea('description_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Description Ar', 'id'=>'mymce']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add News Post</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
