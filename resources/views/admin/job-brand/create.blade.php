<div class="modal fade" id="brandModal" tabindex="-1" role="dialog" aria-labelledby="brandModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="brandModal">Add Job Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'JobBrandController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="form-group col-md-12">
                    {!! Form::text('brand_name', null, ['class'=>'form-control', 'placeholder'=>'Add Brand Name', 'id'=>'brand_name']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                </div>
                <div class="form-group col-md-12">
                <div class="fallback">
                    <input type="file" name="brand_id" id="input-file-now" class="dropify" />
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Job Brand</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
