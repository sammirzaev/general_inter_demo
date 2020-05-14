<div class="modal fade" id="googleAnalyticModal" tabindex="-1" role="dialog" aria-labelledby="googleAnalyticModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="googleAnalyticModal">Create GTM Scripts</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'GoogleTagManagerController@store', 'id'=>'addKey', 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                <div class="form-group col-md-12">
                    {!! Form::textarea('gtm_header', null, ['class'=>'form-control', 'placeholder'=>'Add GTM header scripts ', 'id'=>'gtm_header']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::textarea('gtm_footer', null, ['class'=>'form-control', 'placeholder'=>'Add GTM footer scripts ', 'id'=>'gtm_footer']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add GTM Scripts</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
