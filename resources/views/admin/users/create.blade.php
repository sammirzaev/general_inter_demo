<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="userModal">Create User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'UserController@store', 'id'=>'addForm', 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                <div class="form-group col-md-6">
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name', 'id'=>'name', 'required']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email', 'id'=>'email', 'required']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'id'=>'password', 'required']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::select('role_id', array(''=>'Choose Options') + $roles, null, ['class'=>'form-control', 'id'=>'inputRole', 'required']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::select('position_id', array(''=>'Choose Options') + $positions, null, ['class'=>'form-control', 'id'=>'inputPosition', 'required']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::select('is_active',array( 1=>'Active', 0=>'Not Active'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                </div>
                <div class="form-group col-md-12">
                    <div class="fallback">
                        <input type="file" name="photo_id" id="input-file-now" class="dropify"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add User</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
