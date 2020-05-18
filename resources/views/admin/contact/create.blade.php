<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="contactModal">Add Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'ContactDetailsController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::text('phone_icon', null, ['class'=>'form-control', 'placeholder'=>'Create Phone ICON', 'id'=>'phone_icon']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('address_icon', null, ['class'=>'form-control', 'placeholder'=>'Create Address ICON', 'id'=>'address_icon']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('email_icon', null, ['class'=>'form-control', 'placeholder'=>'Create Email ICON', 'id'=>'email_icon']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('phone_title', null, ['class'=>'form-control', 'placeholder'=>'Create Phone Title', 'id'=>'phone_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('phone_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Phone Title Ar', 'id'=>'phone_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('address_title', null, ['class'=>'form-control', 'placeholder'=>'Create Address Title', 'id'=>'address_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('address_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Address Title Ar', 'id'=>'address_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('email_title', null, ['class'=>'form-control', 'placeholder'=>'Create Email Title', 'id'=>'email_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('email_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Email Title Ar', 'id'=>'email_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Create Phone Number', 'id'=>'phone']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('fax', null, ['class'=>'form-control', 'placeholder'=>'Create FAX Number', 'id'=>'fax']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Create Email', 'id'=>'email']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Create Address', 'id'=>'address']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('address_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Address Ar', 'id'=>'address']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Contact Details</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
