<div class="modal fade" id="siteModal" tabindex="-1" role="dialog" aria-labelledby="siteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="siteModal">Add Twitter Site & Image URL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'TwitterSiteImgController@store', 'id'=>'addKey', 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                <div class="form-group col-md-12">
                    {!! Form::text('twit_site', null, ['class'=>'form-control', 'placeholder'=>'Add Twitter Site URL ', 'id'=>'twit_dom']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::text('twit_img', null, ['class'=>'form-control', 'placeholder'=>'Add Twitter Image URL ', 'id'=>'twit_url']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Twitter Site & Image</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
