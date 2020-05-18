<div class="modal fade" id="careerModal" tabindex="-1" role="dialog" aria-labelledby="careerModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="careerModal">Add Career</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'JobCareersController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::select('category_id[]', array(''=>'Choose Category') + $categories, null, ['class'=>'form-control', 'id'=>'feature', 'multiple']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('type_id', array(''=>'Choose Type') + $type, null, ['class'=>'form-control', 'id'=>'type_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('location_id', array(''=>'Choose Location') + $location, null, ['class'=>'form-control', 'id'=>'location_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('salary_id', array(''=>'Choose Salary') + $salary, null, ['class'=>'form-control', 'id'=>'salary_id', 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('job_name', null, ['class'=>'form-control', 'placeholder'=>'Add Job Name', 'id'=>'job_name']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('job_name_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Job Name Ar', 'id'=>'job_name']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('job_title', null, ['class'=>'form-control', 'placeholder'=>'Add Job Title', 'id'=>'job_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('job_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Job Title Ar', 'id'=>'job_title']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::label('job_desc', 'Job Description En') !!}
                        {!! Form::textarea('job_desc', null, ['class'=>'form-control', 'placeholder'=>'Add Job Description', 'id'=>'mymce']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::label('job_desc', 'Job Description Ar') !!}
                        {!! Form::textarea('job_desc_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Job Description Ar', 'id'=>'mymce']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Career</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
