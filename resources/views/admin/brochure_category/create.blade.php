<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="filterModal">Add Brochure Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'FilterBrochureController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        {!! Form::text('filter', null, ['class'=>'form-control', 'placeholder'=>'Create Brochure Category', 'id'=>'filter']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('filter_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Brochure Category Arabic', 'id'=>'filter_ar']) !!}
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
