<div class="modal fade" id="catModal" tabindex="-1" role="dialog" aria-labelledby="catModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="catModal">Add Job Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'JobCategoryController@store', 'id'=>'addKey', 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                <div class="form-group col-md-12">
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Add Job Category', 'id'=>'name']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::text('name_ar', null, ['class'=>'form-control', 'placeholder'=>'Add Job Category Ar', 'id'=>'name']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Job Category</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
