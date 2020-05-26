<!--=============================Sales Modal Form===========================================-->
<div class="modal fade" id="salesModal" tabindex="-1" role="dialog" aria-labelledby="salesModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="sales">Sales Request</h4>
            </div>
            <div class="modal-body">
                <!-- ContactDetails Form -->
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::open(['method'=>'POST', 'action'=>['FrontController@salesEmail', app()->getLocale()], 'class'=>'form', 'files'=>true]) !!}
                            <div class="clearfix">
                                <!--Location -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="input-md form-control location" required name="location">
                                            <option value="" class="selected">Choose City</option>
                                            @foreach($locations as $location)
                                                @if($location->is_publish == 1)
                                                    <option
                                                        value="{{$location->location}}">{{$location->location}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--Name -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name"  class="input-md round form-control" placeholder="Full Name" pattern=".{3,100}" required>
                                    </div>
                                </div>
                                <!--Subject -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subject"  class="input-md round form-control" placeholder="Subject" pattern=".{3,100}" required>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                                    </div>
                                </div>
                                <!--Phone Number -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="input-md round form-control" placeholder="Contact Number" pattern=".{3,100}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Message -->
                                    <div class="form-group">
                                        <textarea name="message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="cf-left-col">
                                    <div class="error-message">
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
                <button class="btn btn-mod btn-border btn-medium btn-round" type="submit">Submit Request</button>
                {!! Form::close() !!}
                <button type="button" class="btn btn-mod btn-border btn-medium btn-round" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--=============================End Sales Modal Form=======================================-->
<!--=============================Support Modal Form===========================================-->
<div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="supportModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="support">Support Request</h4>
            </div>
            <div class="modal-body">
                <!-- ContactDetails Form -->
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::open(['method'=>'POST', 'action'=>['FrontController@contactEmail', app()->getLocale()], 'class'=>'form contact-form', 'files'=>true]) !!}
                            <div class="clearfix">
                                <!--Location -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="input-md form-control location" required name="location">
                                            <option value="" class="selected">Choose City</option>
                                            @foreach($locations as $location)
                                                    @if($location->is_publish == 1)
                                                        <option
                                                            value="{{$location->location}}">{{$location->location}}</option>
                                                    @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!--Name -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="input-md round form-control" placeholder="Full Name" pattern=".{3,100}" required>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                                    </div>
                                </div>
                                <!--Subject -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="input-md round form-control" placeholder="Subject" pattern=".{3,100}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Message -->
                                    <div class="form-group">
                                        <textarea name="message" class="input-md round form-control" style="height: 84px;" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="cf-left-col">
                                    <div class="error-message">
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
                                    <!-- Inform Tip -->
                                    <div class="form-tip pt-20">
                                        <i class="fa fa-info-circle"></i> All the fields are required
                                    </div>
                                </div>
                            </div>

                            <div id="result"></div>
                    </div>
                </div>
                <!-- End ContactDetails Form -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-mod btn-border btn-medium btn-round">Submit Request</button>
                {!! Form::close() !!}
                <button type="button" class="btn btn-mod btn-border btn-medium btn-round" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--=============================End Support Modal Form=======================================-->
