<div class="modal fade" id="fireTitleConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="fireTitleConfirmDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="fireTitleConfirmDelete">Delete Fire Title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'DELETE','action'=>['FireTitleController@destroy', $fire_title->id]]) !!}
                <div class="form-material m-t-40 row">
                    <div class="col-md-12 text-center">
                        <input type="hidden" name="fire_id" id="fire_id" value="">
                        <h5>ARE YOU SURE DO YOU WANT TO DELETE THIS ITEM?</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="delete_single" class="btn btn-outline-danger" value="Delete Fire Title">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">No</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
