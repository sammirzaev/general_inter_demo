<div class="modal fade" id="urlKeyModal" tabindex="-1" role="dialog" aria-labelledby="urlKeyModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="urlKeyModal">Create Meta URL, Distribution and Coverage</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'MetaURLDistCovController@store', 'id'=>'addKey', 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                <div class="form-group col-md-12">
                    {!! Form::text('url', null, ['class'=>'form-control', 'placeholder'=>'Add Meta URL (your website\'s URL) ', 'id'=>'url', 'required']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::text('distribution', null, ['class'=>'form-control', 'placeholder'=>'Add Meta Distribution (Global) ', 'id'=>'distribution', 'required']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::text('coverage', null, ['class'=>'form-control', 'placeholder'=>'Add Meta Coverage (Worldwide) ', 'id'=>'coverage', 'required']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Meta URL, Distribution and Coverage</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
