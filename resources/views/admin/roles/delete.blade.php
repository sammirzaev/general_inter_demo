<div class="modal fade" id="roleConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="roleConfirmDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="roleConfirmDelete">Delete Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'DELETE','action'=>['RoleController@destroy', $role->id]]) !!}
                        <div class="form-material m-t-40 row">
                            <div class="col-md-12 text-center">
                                <input type="hidden" name="role_id" id="role_id" value="">
                                <h5>ARE YOU SURE DO YOU WANT TO DELETE THIS ITEM ?</h5>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-danger">Delete Role</button>
                        <button type="button" class="btn btn-outline-success" data-dismiss="modal">No</button>
                    </div>
                  {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
