<div class="modal fade" id="homeServiceModal" tabindex="-1" role="dialog" aria-labelledby="homeServiceModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="homeServiceModal">Add Home Service Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'HomeServiceCatController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Create Service Category', 'id'=>'name']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('name_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Service Category Arabic', 'id'=>'name']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('icon', null, ['class'=>'form-control', 'placeholder'=>'Create Service ICON', 'id'=>'icon']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Home Service Category</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
