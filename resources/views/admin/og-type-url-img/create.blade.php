<div class="modal fade" id="ogTypeModal" tabindex="-1" role="dialog" aria-labelledby="ogTypeModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ogTypeModal">Create OG Type URL & Image Links</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'OpenGraphTypeUrlImgController@store', 'id'=>'addKey', 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                <div class="form-group col-md-12">
                    {!! Form::text('type', null, ['class'=>'form-control', 'placeholder'=>'Add OG type  ', 'id'=>'type']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::text('url', null, ['class'=>'form-control', 'placeholder'=>'Add OG url link ', 'id'=>'url']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::text('image', null, ['class'=>'form-control', 'placeholder'=>'Add OG Image link ', 'id'=>'image']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add OG Type, URL & Image</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
