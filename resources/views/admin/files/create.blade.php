<div class="modal fade" id="fileModal" tabindex="-1" role="dialog" aria-labelledby="fileModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="fileModal">Add File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'FileManagementController@store', 'id'=>'addKey', 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                <div class="form-group col-md-12">
                    <div class="fallback">
                        <input type="file" name="file" id="input-file-now" class="dropify" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add File</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
