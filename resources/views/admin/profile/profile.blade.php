@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <center class="m-t-30"> <img src="{{ Auth::user()->photo ? asset('images/'. Auth::user()->photo['photo']) : asset('assets/admin/assets/images/no-avatar.png')}}" class="img-circle" width="150" />
                                <h4 class="card-title m-t-10">{{Auth::user()->name}}</h4>
                                <h6 class="card-subtitle">{{Auth::user()->position->name}}</h6>
                            </center>
                        </div>
                        <div>
                            <hr> </div>
                        <div class="card-body">
                            <small class="text-muted">Email address </small>
                            <h6>{{Auth::user()->email}}</h6>
                            <small class="text-muted p-t-30 db">Role</small>
                            <h6>{{Auth::user()->role->name}}</h6> <small class="text-muted p-t-30 db">Status</small>
                            <h6><span class="badge badge-success">{{Auth::user()->is_active == 1 ? 'Active' : 'Not Active'}}</span></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Profile Information</a> </li>

                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">{{Auth::user()->name}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">Private</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">{{Auth::user()->email}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Current Status</strong>
                                                <br>
                                                <p class="text-muted">
                                                    @if(Cache::has('user-is-online-' . $user->id))
                                                        <small class="text-success">Online</small>
                                                    @else
                                                        <small class="text-danger">Offline</small>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="font-medium m-t-30">User Details Status</h4>
                                        <code></code>
                                        <hr>
                                        <h5 class="m-t-30">{{ Auth::user()->position->name }}<span class="pull-right">user position</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:98%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">{{ Auth::user()->role->name }}<span class="pull-right">user rights approved</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">{{Auth::user()->email}}<span class="pull-right">confirmed</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings" role="tabpanel">
                                <div class="card-body">
                                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['ProfileController@update', $user->id], 'class'=>'form-material m-t-40 row', 'files'=>true]) !!}
                                    <div class="form-group col-md-6">
                                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email', 'id'=>'email']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'id'=>'password', 'required']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name', 'id'=>'full_name']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="hidden" name="role_id" value="{{Auth::user()->role_id}}">
                                        <span class="badge badge-warning">{{ Auth::user()->role->name }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::select('position_id', $positions, null, ['class'=>'form-control', 'id'=>'inputPosition']) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="hidden" name="is_active" value="{{Auth::user()->is_active}}">
                                        <span class="badge badge-info">{{Auth::user()->is_active == 1 ? 'Active' : 'Not Active'}}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <img  class="img-circle" src="{{ $user->photo ? asset('images/'.$user->photo['photo']) : asset('assets/admin/assets/images/no-avatar.png')}}" alt="Avatar" width="100">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="fallback">
                                            <input type="file" name="photo_id" id="input-file-now" class="dropify"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-file-tree"> Update Profile</i> </button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
        @include('admin.rightbar.rightbar')
        <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        @include('admin.footer.footer')
    </div>
@stop

