<div class="modal fade" id="contactRequestModal" tabindex="-1" role="dialog" aria-labelledby="contactRequestModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="contactRequestModal">Add Contact Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>'ContactRequestController@store', 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-md-6">
                        {!! Form::text('sales_title', null, ['class'=>'form-control', 'placeholder'=>'Create Sales Title En', 'id'=>'sales_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('sales_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Sales Title Ar', 'id'=>'sales_title_ar']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('support_title', null, ['class'=>'form-control', 'placeholder'=>'Create Support Title', 'id'=>'support_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('support_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Support Title', 'id'=>'support_title_ar']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('career_title', null, ['class'=>'form-control', 'placeholder'=>'Create Career Title Ar', 'id'=>'career_title']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::text('career_title_ar', null, ['class'=>'form-control', 'placeholder'=>'Create Career Title Ar', 'id'=>'career_title_ar']) !!}
                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::select('is_publish',array( 1=>'Published', 0=>'Not Published'), 0,['class'=>'form-control', 'id'=>'inputStatus']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add Contact Request</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
