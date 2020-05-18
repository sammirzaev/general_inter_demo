<!--=============================Careers Modal Form===========================================-->
<div class="modal fade" id="careersModal" tabindex="-1" role="dialog" aria-labelledby="careersModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="careers">Apply Job</h4>
            </div>
            <div class="modal-body">
                <!-- ContactDetails Form -->
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::open(['method'=>'POST', 'action'=>['FrontController@store', app()->getLocale()], 'class'=>'', 'files'=>true]) !!}
                            <div class="clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="mb-20 mb-md-10">
                                            {!! Form::select('job_id', array(''=>'Choose Position') + $careers, null, ['class'=>'input-md round form-control job_id', 'id'=>'position', 'required']) !!}
                                        </div>
                                    </div>
                                </div>
                                <!--Name -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name"  class="input-md round form-control" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="input-md round form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <!--Phone Number -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="input-md round form-control" placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <!--Subject -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subject"  class="input-md round form-control" placeholder="Subject (Optional)">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Message -->
                                    <div class="form-group">
                                        <textarea name="letter" class="input-md round form-control" style="height: 84px;" placeholder="Cover Letter (Optional)"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Message -->
                                    <div class="form-group">
                                        <div class="mb-20 mb-md-10">
                                            <label for="cv">
                                                * Upload your CV
                                            </label>
                                            <input type="file" name="file"  id="cv" required>
                                            <p class="help-block">
                                                pdf, doc and docx formats are valid
                                            </p>
                                        </div>
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
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="cf-left-col">
                                    <!-- Inform Tip -->
                                    <div class="form-tip pt-20">
                                        <i class="fa fa-info-circle"></i> All the fields are required
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- End ContactDetails Form -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-mod btn-border btn-medium btn-round">Submit</button>
                {{Form::close()}}
                <button type="button" class="btn btn-mod btn-border btn-medium btn-round" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--=============================End Careers Modal Form=======================================-->
