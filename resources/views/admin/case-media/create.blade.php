<div class="modal fade" id="caseMediaModal" tabindex="-1" role="dialog" aria-labelledby="caseMediaModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="caseMediaModal">Add Case Media</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'CaseMediaController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="fallback">
                            <input type="file" name="media" id="input-file-now" class="dropify" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('cat_id', array(''=>'Choose Type') + $case_cat, null, ['class'=>'form-control', 'id'=>'cat_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('cat_id', array(''=>'Choose Type') + $case_cat, null, ['class'=>'form-control', 'id'=>'cat_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('case_id', array(''=>'Choose Case') + $case_study, null, ['class'=>'form-control', 'id'=>'case_id']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('case_id', array(''=>'Choose Case') + $case_study, null, ['class'=>'form-control', 'id'=>'case_id']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Create Title Name', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Title Name Ar', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Case Media</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
