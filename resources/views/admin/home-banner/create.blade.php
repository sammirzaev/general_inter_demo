<div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="bannerModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="bannerModal">Add Home - Banner</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'HomeBannerController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="fallback">
                            <input type="file" name="banner" id="input-file-now" class="dropify" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Create Title Name', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Title Name Arabic', 'id'=>'title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('head_title', null, ['class'=>'form-control', 'placeholder'=>'Create Head Title', 'id'=>'head_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('head_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Head Title Ar', 'id'=>'head_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('quote', null, ['class'=>'form-control', 'placeholder'=>'Create Quote Name', 'id'=>'quote']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('quote_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Quote Name Ar', 'id'=>'quote']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('quote_link', null, ['class'=>'form-control', 'placeholder'=>'Create Quote Link', 'id'=>'quote_link']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Home Banner</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
