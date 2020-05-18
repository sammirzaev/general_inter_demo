<div class="modal fade" id="homeConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="homeConfirmDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="homeConfirmDelete">Delete Home Title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'DELETE','action'=>['HomeTitleController@destroy', $home_title->id]]) !!}
                <div class="form-material m-t-40 row">
                    <div class="col-md-12 text-center">
                        <input type="hidden" name="home_id" id="home_id" value="">
                        <h5>ARE YOU SURE DO YOU WANT TO DELETE THIS ITEM?</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="delete_single" class="btn btn-outline-danger" value="Delete Home Title">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">No</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
