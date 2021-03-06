<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('admin')}}">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{asset('assets/admin/assets/images/header-logo.png')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{asset('assets/admin/assets/images/header-logo.png')}}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{asset('assets/admin/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->
                         <img src="{{asset('assets/admin/assets/images/logo-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
{{--                @if(Auth::check())--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        {{count(auth()->user()->unreadNotifications)}} <i class="mdi mdi-comment-account-outline"></i>--}}
{{--                        <div class="notify">--}}
{{--                            <span class="point"></span><span class="heartbit"></span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu mailbox animated slideInUp">--}}
{{--                        <ul>--}}
{{--                            <li><div class="drop-title">Admin Notifications</div></li>--}}
{{--                            <li>--}}
{{--                                <div class="message-center">--}}
{{--                                @if(count(auth()->user()->unreadNotifications))--}}
{{--                                    @foreach(auth()->user()->unreadNotifications as $notification)--}}
{{--                                    <!-- Message -->--}}
{{--                                    <a href="#">--}}
{{--                                        <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>--}}
{{--                                        <div class="mail-contnet">--}}
{{--                                            <h5>{{$notification->data['position']['name']}}</h5> <span class="mail-desc">Role created by Admin</span>--}}
{{--                                            <span class="time">{{$notification->data['position']['created_at']}}</span>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    @endforeach--}}
{{--                                    @else--}}
{{--                                    <!-- Message -->--}}
{{--                                    <a href="#">--}}
{{--                                        <div class="btn btn-danger btn-circle"><i class="fa fa-cloud-upload"></i></div>--}}
{{--                                        <div class="mail-contnet">--}}
{{--                                            <h5>No Admin Notifications</h5> <span class="mail-desc"></span> <span class="time"></span> </div>--}}
{{--                                    </a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="nav-link text-center">--}}
{{--                            <a href="{{route('markRead')}}">Mark As Read <i class="fa fa-eye"></i></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                @endif--}}
                @if(Auth::check())
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{count(auth()->user()->unreadNotifications)}}<i class="mdi mdi-bell"></i>
                            <div class="notify">
                                @if(count(auth()->user()->unreadNotifications))
                                    <span class="heartbit">
                                </span> <span class="point"></span>
                                @else

                                 @endif
                            </div>
                        </a>
                        <div class="dropdown-menu mailbox animated slideInUp" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title" style="font-size: 10px;">You have {{count(auth()->user()->unreadNotifications)}} new Brochure Requests</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                    @if(count(auth()->user()->unreadNotifications))
                                        @foreach(auth()->user()->unreadNotifications as $notification)
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="{{asset('assets/admin/assets/images/no-avatar.png')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 style="font-size: 13px;">{{$notification->data['brochure']['requester_name']}}</h5> <span class="mail-desc"> Just requested brochure!</span> <span class="time">{{\Carbon\Carbon::parse($notification->data['brochure']['created_at'])->diffForHumans()}}</span> </div>
                                        </a>
                                        @endforeach
                                        @else
                                        <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-cloud-upload"></i></div>
                                                <div class="mail-contnet">
                                                    <h5 style="font-size: 13px;">No Brochure Requests</h5> <span class="mail-desc"></span> <span class="time"></span> </div>
                                            </a>
                                     @endif


                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="{{route('markRead')}}" style="font-size: 13px;">Mark As Read <i class="fa fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link text-muted waves-effect waves-dark" href="{{route('home', app()->getLocale())}}">
                           <i class="fa fa-desktop"></i>
                           <div class="notify">
                                 <span class="heartbit">
                                </span> <span class="point"></span>
                           </div>
                       </a>
                    </li>
                   @endif

                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" name="search" value="{{isset($search) ? $search : ''}}" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                        <button type="submit" style="opacity: 0;"></button>
                    </form>
                </li>
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ Auth::user()->photo ? asset('images/'.Auth::user()->photo['photo']) : asset('assets/admin/assets/images/no-avatar.png')}}" alt="user" class="profile-pic" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        <img src="{{ Auth::user()->photo ? asset('images/'.Auth::user()->photo['photo']) : asset('assets/admin/assets/images/no-avatar.png')}}" alt="user">
                                    </div>
                                    <div class="u-text">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="text-muted">{{Auth::user()->email}}</p>

                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('profiles.index')}}"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-eye"></i> {{Auth::user()->position->name}}</a></li>
                            <li><a href="#"><i class="ti-tag"></i> {{Auth::user()->role->name}}</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('profiles.index')}}"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();
                                   ">
                                    <i class="fa fa-power-off"></i> Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
