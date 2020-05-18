<div class="modal fade" id="contactMapModal" tabindex="-1" role="dialog" aria-labelledby="contactMapModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="contactMapModal">Add Contact Map</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'ContactMapController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        {!! Form::text('icon', null, ['class'=>'form-control', 'placeholder'=>'Create Map ICON', 'id'=>'icon']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('open_title', null, ['class'=>'form-control', 'placeholder'=>'Create Open Title', 'id'=>'open_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('open_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Open Title Ar', 'id'=>'open_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('close_title', null, ['class'=>'form-control', 'placeholder'=>'Create Close Title', 'id'=>'close_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('close_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Close Title Ar', 'id'=>'close_title']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('link', null, ['class'=>'form-control', 'placeholder'=>'Put iFrame Google Map Link', 'id'=>'link']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Contact Map</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
