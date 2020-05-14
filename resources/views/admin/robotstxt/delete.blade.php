<div class="modal fade" id="robotConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="robotConfirmDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="robotConfirmDelete">Delete Robots Engine</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'DELETE','action'=>['RobotsController@destroy', $robot->id]]) !!}
                <div class="form-material m-t-40 row">
                    <div class="col-md-12 text-center">
                        <input type="hidden" name="robot_id" id="robot_id" value="">
                        <h5>ARE YOU SURE DO YOU WANT TO DELETE THIS ENGINE ?</h5>
                        <h6>Your Website Might Not Be Appear in SEO</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-danger">Delete Robots Engine</button>
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">No</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
