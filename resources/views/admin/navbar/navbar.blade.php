<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        @if(Auth::check())
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{ Auth::user()->photo ? asset('public/images/'. Auth::user()->photo['photo']) : asset('public/assets/admin/assets/images/no-avatar.png')}}" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>{{Auth::user()->name}}</h5>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="" data-toggle="tooltip" title="Logout">
                    <i class="mdi mdi-power"></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </a>
                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    <a href="{{route('profiles.index')}}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><span class="badge badge-success">{{Auth::user()->is_active == 1 ? 'Active' : 'Not Active'}}</span></a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-tag"></i> {{Auth::user()->role->name}}</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </a>
                    <!-- text-->
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        @endif
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-small-cap">PERSONAL</li>
                <li {{ Route::currentRouteName() === 'admin' ? 'active' : '' }}> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i><span class="hide-menu">
                            Dashboard
                            <span class="label label-rouded label-themecolor pull-right">1</span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li {{ Route::currentRouteName() === 'admin' ? 'active' : '' }}><a href="{{route('admin')}}">Dashboard </a></li>
                    </ul>
                </li>
                <li class="
                {{ Route::currentRouteName() === 'roles.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'positions.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'avatars.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'users.index' ? 'active' : '' }}
                 "> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Admin Features</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="{{ Route::currentRouteName() === 'roles.index' ? 'active' : '' }}"><a href="{{route('roles.index')}}">Roles</a></li>
                        <li class="{{ Route::currentRouteName() === 'positions.index' ? 'active' : '' }}"><a href="{{route('positions.index')}}">Positions</a></li>
                        <li class="{{ Route::currentRouteName() === 'avatars.index' ? 'active' : '' }}"><a href="{{route('avatars.index')}}">User Avatars</a></li>
                        <li class="{{ Route::currentRouteName() === 'users.index' ? 'active' : '' }}"><a href="{{route('users.index')}}">Users</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-access-point"></i><span class="hide-menu">Home Page</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Slider Page</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Partners</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">About Page<span class="label label-rouded label-danger pull-right">9</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Banner</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Engineers</a></li>
                        <li><a href="#">Certificates & Services</a></li>
                        <li><a href="#">Solving Complex</a></li>
                        <li><a href="#">Compliance</a></li>
                        <li><a href="#">Compliance Tabs</a></li>
                        <li><a href="#">Diverse Background</a></li>
                        <li><a href="#">Diverse Grids</a></li>
                    </ul>
                </li>
                <li lass="{{ Route::currentRouteName() === 'brochure-requests.index' ? 'active' : '' }}"><a href="{{route('brochure-requests.index')}}"><i class="mdi mdi-mailbox"></i> Brochure Requests</a></li>
                <li class="nav-small-cap
                {{ Route::currentRouteName() === 'brochures.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'brochures-filter.index' ? 'active' : '' }}
                 ">Services & Projects</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Services</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Services</a></li>
                        <li class="{{ Route::currentRouteName() === 'brochure-filter.index' ? 'active' : '' }}"><a href="{{route('brochure-filter.index')}}">Brochure Category</a></li>
                        <li class="{{ Route::currentRouteName() === 'brochures.index' ? 'active' : '' }}"><a href="{{route('brochures.index')}}">Brochures</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Projects</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Projects</a></li>
                    </ul>
                </li>
                <li class="
                   {{ Route::currentRouteName() === 'brand-media.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-brand.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-category.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-location.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-salary.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-type.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-board.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'career-contact.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'candidate.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'email-configuration.index' ? 'active' : '' }}
                    "> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Job Board</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="{{ Route::currentRouteName() === 'brand-media.index' ? 'active' : '' }}"><a href="{{route('brand-media.index')}}">Brand Media</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-brand.index' ? 'active' : '' }}"><a href="{{route('job-brand.index')}}">Job Brand</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-category.index' ? 'active' : '' }}"><a href="{{route('job-category.index')}}">Job Category</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-location.index' ? 'active' : '' }}"><a href="{{route('job-location.index')}}">Job Location</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-salary.index' ? 'active' : '' }}"><a href="{{route('job-salary.index')}}">Job Salary</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-type.index' ? 'active' : '' }}"><a href="{{route('job-type.index')}}">Job Type</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-board.index' ? 'active' : '' }}"><a href="{{route('job-board.index')}}">Careers</a></li>
                        <li class="{{ Route::currentRouteName() === 'career-contact.index' ? 'active' : '' }}"><a href="{{route('career-contact.index')}}">Careers Email Configuration</a></li>
                        <li class="{{ Route::currentRouteName() === 'cc-configuration.index' ? 'active' : '' }}"><a href="{{route('cc-configuration.index')}}">CC Email Configuration</a></li>
                        <li class="{{ Route::currentRouteName() === 'bcc-configuration.index' ? 'active' : '' }}"><a href="{{route('bcc-configuration.index')}}">BCC Email Configuration</a></li>
                        <li class="{{ Route::currentRouteName() === 'email-configuration.index' ? 'active' : '' }}"><a href="{{route('email-configuration.index')}}">Email Configuration</a></li>
                        <li class=" {{ Route::currentRouteName() === 'candidate.index' ? 'active' : '' }}"><a href="{{route('candidate.index')}}">Candidates</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap">Contacts & Footer</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Contact & Footer</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Contact Page</a></li>
                        <li><a href="#">Contact Email Configuration</a></li>
                        <li><a href="#">Footer</a></li>
                        <li><a href="#">Footer Location</a></li>
                        <li><a href="#">Footer Quick Links</a></li>
                        <li><a href="#">Socials</a></li>
                    </ul>
                </li>
                <li class="{{ Route::currentRouteName() === 'meta-keywords.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'meta-description.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'meta-subject.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'meta-coverage.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'og-title.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'og-type.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'og-site.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'verification.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'analytics.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'tag-manager.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'header-space.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'footer-space.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'facebook.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'robots.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'file.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'twitter-domain.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'twitter-site.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'twitter-card.index' ? 'active' : '' }}
                           {{ Route::currentRouteName() === 'twitter-title.index' ? 'active' : '' }}

                    ">
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">SEO Page <span class="label label-rouded label-light-danger pull-right">19</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#" class="has-arrow">Meta Tags <span class="label label-rounded label-light-info">4</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'meta-keywords.index' ? 'active' : '' }}"><a href="{{route('meta-keywords.index')}}">Meta Keywords</a></li>
                                <li class="{{ Route::currentRouteName() === 'meta-description.index' ? 'active' : '' }}"><a href="{{route('meta-description.index')}}">Meta Description</a></li>
                                <li class="{{ Route::currentRouteName() === 'meta-subject.index' ? 'active' : '' }}"><a href="{{route('meta-subject.index')}}">Meta Sub/Copy</a></li>
                                <li class="{{ Route::currentRouteName() === 'meta-coverage.index' ? 'active' : '' }}"><a href="{{route('meta-coverage.index')}}">Meta URL/Dist/Cov</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="has-arrow">OpenGraph Tags <span class="label label-rounded label-light-info">3</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'og-title.index' ? 'active' : '' }}"><a href="{{route('og-title.index')}}">OG Title</a></li>
                                <li class="{{ Route::currentRouteName() === 'og-type.index' ? 'active' : '' }}"><a href="{{route('og-type.index')}}">OG Type/URL/Image</a></li>
                                <li class="{{ Route::currentRouteName() === 'og-site.index' ? 'active' : '' }}"><a href="{{route('og-site.index')}}">OG SiteName/Desc</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="has-arrow">Google SEO <span class="label label-rounded label-light-info">3</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'verification.index' ? 'active' : '' }}"><a href="{{route('verification.index')}}">Google Verification</a></li>
                                <li class="{{ Route::currentRouteName() === 'analytics.index' ? 'active' : '' }}"><a href="{{route('analytics.index')}}">Google Analytics</a></li>
                                <li class="{{ Route::currentRouteName() === 'tag-manager.index' ? 'active' : '' }}"><a href="{{route('tag-manager.index')}}">Google GTM</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="has-arrow">Twitter SEO <span class="label label-rounded label-light-info">4</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'twitter-domain.index' ? 'active' : '' }}"><a href="{{route('twitter-domain.index')}}">Twitter Domain/URL</a></li>
                                <li class="{{ Route::currentRouteName() === 'twitter-site.index' ? 'active' : '' }}"><a href="{{route('twitter-site.index')}}">Twitter Site/Image</a></li>
                                <li class="{{ Route::currentRouteName() === 'twitter-card.index' ? 'active' : '' }}"><a href="{{route('twitter-card.index')}}">Twitter Card</a></li>
                                <li class="{{ Route::currentRouteName() === 'twitter-title.index' ? 'active' : '' }}"><a href="{{route('twitter-title.index')}}">Twitter Title/Desc</a></li>
                            </ul>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'facebook.index' ? 'active' : '' }}"><a href="{{route('facebook.index')}}">Facebook SEO</a></li>
                        <li class="{{ Route::currentRouteName() === 'header-space.index' ? 'active' : '' }}"><a href="{{route('header-space.index')}}">Header Input</a></li>
                        <li class="{{ Route::currentRouteName() === 'footer-space.index' ? 'active' : '' }}"><a href="{{route('footer-space.index')}}">Footer Input</a></li>
                        <li class="{{ Route::currentRouteName() === 'robots.index' ? 'active' : '' }}"><a href="{{route('robots.index')}}">Robots TXT</a></li>
                        <li class="{{ Route::currentRouteName() === 'file.index' ? 'active' : '' }}"><a href="{{route('file.index')}}">File Management SEO</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
