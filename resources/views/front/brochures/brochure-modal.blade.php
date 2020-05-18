<div class="modal fade" id="brochureModal" tabindex="-1" role="dialog" aria-labelledby="brochureModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="brochureModal">REQUEST BROCHURE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>['FrontController@brochureRequest', app()->getLocale()], 'class'=>'', 'files'=>true]) !!}

                <div class="row">
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::select('brochure_id', array(''=>'Choose Brochure') + $brochure_request,  null,['class'=>'nice-select brochure_id', 'required']) !!}
                    </div>
                    <div class="form-group col-sm-12 col-lg-12">
                        <input class="input-gray" type="text" name="requester_name" required placeholder="Full Name*">
                    </div>
                    <div class="form-group col-sm-12 col-lg-12">
                        <input class="input-gray" type="email" name="requester_email" required placeholder="Email*">
                    </div>
                    <div class="form-group col-sm-12 col-lg-12">
                        <input class="input-gray" type="text" name="requester_phone" required placeholder="Your Phone Number*">
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn-upper btn-yellow btn">Subscribe</button>
                    </div>
                </div>
                {{Form::close()}}
                </div>
            </div>
        </div>
        </div>
        </div>
