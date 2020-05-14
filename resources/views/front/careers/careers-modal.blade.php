<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="careerModal">Apply Job</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'POST', 'action'=>['FrontController@store', app()->getLocale()], 'class'=>'', 'files'=>true]) !!}
                <div class="row">
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::select('job_id', array(''=>'Choose Position') + $careers, null, ['class'=>'nice-select job_id', 'id'=>'position', 'required']) !!}
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                        <input class="input-gray" type="text" name="name" required placeholder="Full Name*">
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                        <input class="input-gray" type="email" name="email" placeholder="Email*">
                    </div>
                    <div class="form-group col-sm-6 col-lg-4">
                        <input class="input-gray" type="text" name="phone" placeholder="Your Phone Number*">
                    </div>
                    <div class="form-group col-sm-12 col-lg-12">
                        <input class="input-gray" type="text" name="subject" placeholder="Subject (Optinal)">
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea class="input-gray" name="letter"  placeholder="Cover Letter (Optional)*"></textarea>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="cv">Upload CV*</label>
                        <input type="file" class="input-gray" id="cv" name="file" required  placeholder="Upload Your CV*">
                        <p class="text-muted">upload only pdf, doc, docx formats please</p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn-upper btn-yellow btn">Submit</button>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
