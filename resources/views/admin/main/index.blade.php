@extends('layouts.admin')
@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
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
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-account-star-variant text-info"></i></h2>
                                <h3 class="">{{$count_user}}</h3>
                                <h6 class="card-subtitle">Total User</h6></div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{$count_user}}%; height: 6px;" aria-valuenow="{{$count_user}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                <h3 class="">{{$count_brochures}}</h3>
                                <h6 class="card-subtitle">Total Requested Brochures</h6></div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$count_brochures}}%; height: 6px;" aria-valuenow="{{$count_brochures}}" aria-valuemin="0" aria-valuemax="{{$count_brochures*10}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                                <h3 class="">{{$count_candidate}}</h3>
                                <h6 class="card-subtitle">Applied Candidates</h6></div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{$count_candidate}}%; height: 6px;" aria-valuenow="{{$count_candidate}}" aria-valuemin="0" aria-valuemax="{{$count_candidate*10}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
                                <h3 class="">{{$count_job}}</h3>
                                <h6 class="card-subtitle">Total Jobs </h6></div>
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{$count_brochures}}%; height: 6px;" aria-valuenow="{{$count_brochures}}" aria-valuemin="0" aria-valuemax="{{$count_brochures*100}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-xlg-12">
                    <div class="row">
                    <div class="card card-inverse card-info col-md-5 col-lg-5 mr-5 ml-5">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="m-r-20 align-self-center">
                                    <h1 class="text-white"><i class="ti-light-bulb"></i></h1></div>
                                <div>
                                    <h3 class="card-title">Published Jobs</h3>

                                    <h6 class="card-subtitle">Today {{\Carbon\Carbon::now()->toDateString()}}</h6> </div>
                            </div>
                            <div class="row">
                                <div class="col-6 align-self-center">
                                    <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup> {{$publish_job}}</h2>
                                </div>
                                <div class="col-6 p-t-10 p-b-20 text-right">
                                    <div class="spark-count" style="height:65px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-inverse card-success col-md-5 col-lg-5 ml-5 mr-5">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="m-r-20 align-self-center">
                                    <h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
                                <div>
                                    <h3 class="card-title">Folder Usage</h3>
                                    <h6 class="card-subtitle">Today {{\Carbon\Carbon::now()->toDateString()}}</h6> </div>
                            </div>
                            <div class="row">
                                <div class="col-6 align-self-center">
                                    <h2 class="font-light text-white">{{$file_size}} MB</h2>
                                </div>
                                <div class="col-6 p-t-10 p-b-20 text-right align-self-center">
                                    <div class="spark-count2" style="height:65px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                </div>
            </div>

            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Activity Timeline</h4>
                            <h6 class="card-subtitle">Latest Updates</h6>
                            <div class="profiletimeline m-t-40">
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="{{asset('assets/admin/assets/images/header-logo.png')}}" alt="user" class="img-circle"> </div>
                                    <div class="sl-right">
                                        <div><a href="#" class="link">PROJECTS</a> <span class="sl-date"></span>
                                            <p>Latest Updated Projects<a href="#"> </a></p>
                                            <div class="row">
                                                @if(count($projects) >0)
                                                @foreach($projects  as $project)
                                                <div class="col-lg-3 col-md-6 m-b-20">
                                                    <img src="{{$project->media}}" alt="user" class="img-responsive radius">
                                                </div>
                                                @endforeach
                                                @else
                                                    <div class="row m-t-20">
                                                        <div class="col-lg-3 col-md-6 m-b-20">
                                                            <img src="{{asset('assets/front/images/header-logo.png')}}" alt="user" class="img-responsive radius">
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 m-b-20">
                                                            No Projects Registered or Not Published
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="{{asset('assets/admin/assets/images/browser/chrome-logo.png')}}" alt="user" class="img-circle"> </div>
                                    <div class="sl-right">
                                        <div> <a href="#" class="link">Recently Job Applied Candidates</a> <span class="sl-date"></span>
                                            <div class="m-t-20 row">
                                                <div class="col-md-3 col-xs-12"><img src="{{asset('assets/front/images/header-logo.png')}}" alt="user" class="img-responsive radius"></div>
                                                <div class="col-md-9 col-xs-12">
                                                     @if(count($latest_candidate) >0)
                                                        @foreach($latest_candidate as $candidate)
                                                            <p>
                                                                <span class="badge-dark badge">
                                                                    <a class="badge badge-danger" style="color: #0A0A0A;">{{$candidate->name}}</a> |
                                                                    <a class="badge badge-warning" style="color: #0A0A0A;"> {{$candidate->email}}</a> |
                                                                    <a class="badge badge-info" style="color: #0A0A0A;"> {{$candidate->jobs->job_name}}</a> |
                                                                    <a class="badge" style="background-color: #a7ed4d; color: #0A0A0A;"> {{$candidate->created_at->diffForHumans()}}</a>
                                                                </span>
                                                            </p>
                                                        @endforeach
                                                    @else
                                                        <p class="m-t-10"> No Candidates </p>
                                                   @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="{{asset('assets/admin/assets/images/header-logo.png')}}" alt="user" class="img-circle"> </div>
                                    <div class="sl-right">
                                        <div><a href="#" class="link">Latest Job Registered</a> <span class="sl-date"></span>
                                            <p class="m-t-10">
                                              @foreach($job as $latest)
                                                  <span class="badge badge-info">{{$latest->job_name}} | {{$latest->location->name}}</span>
                                              @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xlg-3">
                    <div class="card">
                        <div class="card-body bg-inverse" style="background: url({{asset('assets/admin/assets/images/background/user-info.jpg')}}) / cover;">
                            <h4 class="text-white card-title">Users list</h4>
                            <h6 class="card-subtitle text-white m-0 op-5">Currently Registered</h6>
                        </div>
                        <div class="card-body">
                            <div class="message-box contact-box">
                                <h2 class="add-ct-btn"><img src="{{asset('assets/admin/assets/images/header-logo.png')}}" alt="user" class="img-circle waves-effect waves-dark"></h2>
                                <div class="message-widget contact-widget">
                                @if($users)
                                    @foreach($users as $user)
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img">
                                            @if(!empty($user->photo->photo))
                                                @if(file_exists(public_path('images/'. $user->photo->photo)))
                                                    <img src="{{asset('images/'. $user->photo->photo)}}" alt="user-img" class="img-circle">
                                                @endif
                                            @else
                                                <img src="{{asset('assets/admin/assets/images/no-avatar.png')}}" alt="user-img" class="img-circle">
                                            @endif
                                            <span class="profile-status  {{Cache::has('user-is-online-' . $user->id) ? 'online' : 'busy'}}  pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>{{$user->name}}</h5>
                                            <span class="mail-desc">{{$user->email}}</span>
                                            <span class="mail-desc">{{$user->position->name}}</span>
                                            <span class="mail-desc">
                                                @if(Cache::has('user-is-online-' . $user->id))
                                                    <small class="text-success">Online</small>
                                                @else
                                                    <small class="text-danger">Offline</small>
                                                @endif</span>
                                        </div>
                                    </a>
                                    @endforeach
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
         @include('admin.rightbar.rightbar')
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
       @include('admin.footer.footer')
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@stop
