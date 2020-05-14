<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mediaModal">Upload Brand Media</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'BrandPhotoController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="fallback">
                    <input type="file" name="name" id="input-file-now" class="dropify" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
