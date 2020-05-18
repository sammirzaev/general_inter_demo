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
            <div class="profile-img"> <img src="{{ Auth::user()->photo ? asset('images/'. Auth::user()->photo['photo']) : asset('assets/admin/assets/images/no-avatar.png')}}" alt="user" />
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
                <li class="nav-small-cap">Admin Management</li>
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
                @if(Auth::user()->role->name == 'Administrator')
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
                @endif
                @if(Auth::user()->role->name == 'Editor' || Auth::user()->role->name == 'Viewer' || Auth::user()->role->name == 'Administrator')
                <li class="nav-small-cap">Brochure Requesters</li>
                <li {{ Route::currentRouteName() === 'brochure-requests.index' ? 'active' : '' }}> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                            <i class="mdi mdi-bell"></i><span class="hide-menu">
                            Requests Box
                            <span class="label label-rouded label-themecolor pull-right">1</span>
                        </span>
                        </a>
                  <ul aria-expanded="false" class="collapse">
                            <li class="{{ Route::currentRouteName() === 'brochure-requests.index' ? 'active' : '' }}"><a href="{{route('brochure-requests.index')}}"><i class="mdi mdi-mailbox"></i> Brochure Requests</a></li>
                        </ul>
                </li>
                <li class="nav-small-cap">Page Management</li>
                <li class="
                {{ Route::currentRouteName() === 'home-banner.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'home-service-cat.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'home-service.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'home-partner.index' ? 'active' : '' }}
                 "> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-access-point"></i><span class="hide-menu">Home Page<span class="label label-rouded label-info pull-right">4</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="{{ Route::currentRouteName() === 'home-banner.index' ? 'active' : '' }}"><a href="{{route('home-banner.index')}}">Banner/Home</a></li>
                        <li class="{{ Route::currentRouteName() === 'home-service-cat.index' ? 'active' : '' }}"><a href="{{route('home-service-cat.index')}}">Service Categories</a></li>
                        <li class="{{ Route::currentRouteName() === 'home-service.index' ? 'active' : '' }}"><a href="{{route('home-service.index')}}">Services</a></li>
                        <li class="{{ Route::currentRouteName() === 'home-partner.index' ? 'active' : '' }}"><a href="{{route('home-partner.index')}}">Partners</a></li>
                    </ul>
                </li>
                <li class="
                 {{ Route::currentRouteName() === 'about-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-concept.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-story-cat.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-company.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-diversity-one.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-diversity-icon.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-diversity-two.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-leadership-media.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-leadership.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-timeline-cat.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-timeline.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'about-policy.index' ? 'active' : '' }}
                   ">
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">About Page
                            <span class="label label-rouded label-info pull-right">12</span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="{{ Route::currentRouteName() === 'about-banner.index' ? 'active' : '' }}"><a href="{{route('about-banner.index')}}">Banner/Content</a></li>
                        <li class="{{ Route::currentRouteName() === 'about-concept.index' ? 'active' : '' }}"><a href="{{route('about-concept.index')}}">Concepts</a></li>
                        <li class=""><a href="#" class="has-arrow
                        {{ Route::currentRouteName() === 'about-story-cat.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-company.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-diversity-one.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-diversity-icon.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-diversity-two.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-leadership-media.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-leadership.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-timeline-cat.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-timeline.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'about-policy.index' ? 'active' : '' }}
                         ">Story Tabs <span class="label label-rounded label-light-info"> 10</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'about-story-cat.index' ? 'active' : '' }}"><a href="{{route('about-story-cat.index')}}">Story Categories</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-company.index' ? 'active' : '' }}"><a href="{{route('about-company.index')}}">About The Company</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-diversity-one.index' ? 'active' : '' }}"><a href="{{route('about-diversity-one.index')}}">Diversity First Column</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-diversity-icon.index' ? 'active' : '' }}"><a href="{{route('about-diversity-icon.index')}}">Diversity ICONS/Title</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-diversity-two.index' ? 'active' : '' }}"><a href="{{route('about-diversity-two.index')}}">Diversity Second Column</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-leadership-media.index' ? 'active' : '' }}"><a href="{{route('about-leadership-media.index')}}">Leadership Media</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-leadership.index' ? 'active' : '' }}"><a href="{{route('about-leadership.index')}}">Leadership</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-timeline-cat.index' ? 'active' : '' }}"><a href="{{route('about-timeline-cat.index')}}">Timeline Categories</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-timeline.index' ? 'active' : '' }}"><a href="{{route('about-timeline.index')}}">Timeline</a></li>
                                <li class="{{ Route::currentRouteName() === 'about-policy.index' ? 'active' : '' }}"><a href="{{route('about-policy.index')}}">Policies</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="
                    {{ Route::currentRouteName() === 'home-title.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'about-title.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'service-title.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'project-title.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'brochure-title.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'career-title.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'contact-title.index' ? 'active' : '' }}
                    "> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">
                            Page Titles
                            <span class="label label-rouded label-themecolor pull-right">11</span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="{{ Route::currentRouteName() === 'home-title.index' ? 'active' : '' }}"><a href="{{route('home-title.index')}}"><i class="mdi mdi-home"></i> Home</a></li>
                        <li class="{{ Route::currentRouteName() === 'about-title.index' ? 'active' : '' }}"><a href="{{route('about-title.index')}}"><i class="mdi mdi-account-check"></i> About</a></li>
                        <li class="{{ Route::currentRouteName() === 'fire-title.index' ? 'active' : '' }}"><a href="{{route('fire-title.index')}}"><i class="mdi mdi-firefox"></i> Fire & Life Safety </a></li>
                        <li class="{{ Route::currentRouteName() === 'security-title.index' ? 'active' : '' }}"><a href="{{route('security-title.index')}}"><i class="mdi mdi-security"></i> Security & ELV </a></li>
                        <li class="{{ Route::currentRouteName() === 'water-title.index' ? 'active' : '' }}"><a href="{{route('water-title.index')}}"><i class="mdi mdi-water"></i> Water Treatment </a></li>
                        <li class="{{ Route::currentRouteName() === 'facility-title.index' ? 'active' : '' }}"><a href="{{route('facility-title.index')}}"><i class="mdi mdi-screwdriver"></i> Facility </a></li>
                        <li class="{{ Route::currentRouteName() === 'news-title.index' ? 'active' : '' }}"><a href="{{route('news-title.index')}}"><i class="mdi mdi-book-multiple"></i> News & Events </a></li>
                        <li class="{{ Route::currentRouteName() === 'case-title.index' ? 'active' : '' }}"><a href="{{route('case-title.index')}}"><i class="mdi mdi-search-web"></i> Case Studies </a></li>
                        <li class="{{ Route::currentRouteName() === 'project-title.index' ? 'active' : '' }}"><a href="{{route('project-title.index')}}"><i class="mdi mdi-book-multiple"></i> Projects </a></li>
                        <li class="{{ Route::currentRouteName() === 'career-title.index' ? 'active' : '' }}"><a href="{{route('career-title.index')}}"><i class="mdi mdi-account-alert"></i> Careers </a></li>
                        <li class="{{ Route::currentRouteName() === 'contact-title.index' ? 'active' : '' }}"><a href="{{route('contact-title.index')}}"><i class="mdi mdi-phone-in-talk"></i> Contact </a></li>
                    </ul>
                </li>
                @if(Auth::user()->role->name == 'Editor' || Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Viewer')
                    <li class="nav-small-cap">Navbar Management</li>
                    <li> <a class="has-arrow waves-effect waves-dark
                    {{ Route::currentRouteName() === 'nav-logo.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'nav-menu.index' ? 'active' : '' }}
                     " href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i>
                        <span class="hide-menu">Navbar<span class="label label-rouded label-success pull-right">3</span></span></a>
                       <ul aria-expanded="false" class="collapse">
                          <li><a class="{{ Route::currentRouteName() === 'nav-logo.index' ? 'active' : '' }}" href="{{route('nav-logo.index')}}">Logo</a></li>
                          <li><a class="{{ Route::currentRouteName() === 'nav-menu.index' ? 'active' : '' }}" href="{{route('nav-menu.index')}}">Menu</a></li>
                       </ul>
                    </li>
                 @endif
                <li class="nav-small-cap">Services / Projects / Insights</li>
                <li class="
                 {{ Route::currentRouteName() === 'brochures.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'brochures-filter.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'fire-type.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'security-type.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'water-type.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'facility-type.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'fire-category.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'security-category.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'water-category.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'facility-category.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'fire-service.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'security-service.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'water-service.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'facility-service.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'fire-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'security-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'water-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'facility-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'fire-concept.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'security-concept.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'water-concept.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'facility-concept.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'project-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'project-category.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'project.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'testimonial-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'testimonial.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'news-category.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'news-media.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'news-post.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'news-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'case-banner.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'case-category.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'case-media.index' ? 'active' : '' }}
                 {{ Route::currentRouteName() === 'case-study.index' ? 'active' : '' }}
                  "> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Services<span class="label label-rouded label-success pull-right">23</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="{{ Route::currentRouteName() === 'brochure-filter.index' ? 'active' : '' }}"><a href="{{route('brochure-filter.index')}}">Brochure Category</a></li>
                        <li class="{{ Route::currentRouteName() === 'brochures.index' ? 'active' : '' }}"><a href="{{route('brochures.index')}}">Brochures</a></li>
                        <li class=""><a href="#" class="has-arrow">Banners <span class="label label-rounded label-light-info"> 5</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'fire-banner.index' ? 'active' : '' }}"><a href="{{route('fire-banner.index')}}">Fire Banner</a></li>
                                <li class="{{ Route::currentRouteName() === 'security-banner.index' ? 'active' : '' }}"><a href="{{route('security-banner.index')}}">Security Banner</a></li>
                                <li class="{{ Route::currentRouteName() === 'water-banner.index' ? 'active' : '' }}"><a href="{{route('water-banner.index')}}">Water Banner</a></li>
                                <li class="{{ Route::currentRouteName() === 'facility-banner.index' ? 'active' : '' }}"><a href="{{route('facility-banner.index')}}">Facility Banner</a></li>
                                <li class="{{ Route::currentRouteName() === 'career-banner.index' ? 'active' : '' }}"><a href="{{route('career-banner.index')}}">Career Banner</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#" class="has-arrow
                            {{ Route::currentRouteName() === 'fire-type.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'security-type.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'water-type.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'facility-type.index' ? 'active' : '' }}
                         ">Service Types <span class="label label-rounded label-light-info"> 4</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'fire-type.index' ? 'active' : '' }}"><a href="{{route('fire-type.index')}}">Fire Type</a></li>
                                <li class="{{ Route::currentRouteName() === 'security-type.index' ? 'active' : '' }}"><a href="{{route('security-type.index')}}">Security Type</a></li>
                                <li class="{{ Route::currentRouteName() === 'water-type.index' ? 'active' : '' }}"><a href="{{route('water-type.index')}}">Water Type</a></li>
                                <li class="{{ Route::currentRouteName() === 'facility-type.index' ? 'active' : '' }}"><a href="{{route('facility-type.index')}}">Facility Type</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#" class="has-arrow
                            {{ Route::currentRouteName() === 'fire-category.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'security-category.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'water-category.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'facility-category.index' ? 'active' : '' }}
                         ">Categories <span class="label label-rounded label-light-info"> 4</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'fire-category.index' ? 'active' : '' }}"><a href="{{route('fire-category.index')}}">Fire Category</a></li>
                                <li class="{{ Route::currentRouteName() === 'security-category.index' ? 'active' : '' }}"><a href="{{route('security-category.index')}}">Security Category</a></li>
                                <li class="{{ Route::currentRouteName() === 'water-category.index' ? 'active' : '' }}"><a href="{{route('water-category.index')}}">Water Category</a></li>
                                <li class="{{ Route::currentRouteName() === 'facility-category.index' ? 'active' : '' }}"><a href="{{route('facility-category.index')}}">Facility Category</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#" class="has-arrow
                        {{ Route::currentRouteName() === 'fire-service.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'security-service.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'water-service.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'facility-service.index' ? 'active' : '' }}
                         ">Service Pages <span class="label label-rounded label-light-info"> 4</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'fire-service.index' ? 'active' : '' }}"><a href="{{route('fire-service.index')}}">Fire & Life Safety</a></li>
                                <li class="{{ Route::currentRouteName() === 'security-service.index' ? 'active' : '' }}"><a href="{{route('security-service.index')}}">Security & ELV</a></li>
                                <li class="{{ Route::currentRouteName() === 'water-service.index' ? 'active' : '' }}"><a href="{{route('water-service.index')}}">Water Treatment</a></li>
                                <li class="{{ Route::currentRouteName() === 'facility-service.index' ? 'active' : '' }}"><a href="{{route('facility-service.index')}}">Facility Management</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="#" class="has-arrow
                        {{ Route::currentRouteName() === 'fire-concept.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'security-concept.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'water-concept.index' ? 'active' : '' }}
                        {{ Route::currentRouteName() === 'facility-concept.index' ? 'active' : '' }}
                         ">Concepts <span class="label label-rounded label-light-info"> 4</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li class="{{ Route::currentRouteName() === 'concept-title.index' ? 'active' : '' }}"><a href="{{route('concept-title.index')}}">Title Concepts</a></li>
                                <li class="{{ Route::currentRouteName() === 'fire-concept.index' ? 'active' : '' }}"><a href="{{route('fire-concept.index')}}">Fire Concept</a></li>
                                <li class="{{ Route::currentRouteName() === 'security-concept.index' ? 'active' : '' }}"><a href="{{route('security-concept.index')}}">Security Concept</a></li>
                                <li class="{{ Route::currentRouteName() === 'water-concept.index' ? 'active' : '' }}"><a href="{{route('water-concept.index')}}">Water Concept</a></li>
                                <li class="{{ Route::currentRouteName() === 'facility-concept.index' ? 'active' : '' }}"><a href="{{route('facility-concept.index')}}">Facility Concept</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark
                {{ Route::currentRouteName() === 'project-banner.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'project-category.index' ? 'active' : '' }}
                {{ Route::currentRouteName() === 'project.index' ? 'active' : '' }}
                 " href="#" aria-expanded="false"><i class="mdi mdi-table"></i> <span class="hide-menu"> Projects <span class="label label-rouded label-success pull-right"> 5</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a class="{{ Route::currentRouteName() === 'project-banner.index' ? 'active' : '' }}" href="{{route('project-banner.index')}}">Banner</a></li>
                        <li><a class="{{ Route::currentRouteName() === 'project-category.index' ? 'active' : '' }}" href="{{route('project-category.index')}}">Categories</a></li>
                        <li><a class="{{ Route::currentRouteName() === 'project.index' ? 'active' : '' }}" href="{{route('project.index')}}">Projects</a></li>
                        <li><a class="{{ Route::currentRouteName() === 'testimonial-banner' ? 'active' : '' }}" href="{{route('testimonial-banner.index')}}">Testimonial Banner</a></li>
                        <li><a class="{{ Route::currentRouteName() === 'testimonial.index' ? 'active' : '' }}" href="{{route('testimonial.index')}}">Testimonials</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow
                    {{ Route::currentRouteName() === 'news-category.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'news-media.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'news-post.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'news-banner.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'case-banner.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'case-category.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'case-media.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'case-study.index' ? 'active' : '' }}
                      " href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i> <span class="hide-menu"> Insights <span class="label label-rouded label-success pull-right"> 8</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li> <a class="has-arrow
                            {{ Route::currentRouteName() === 'news-banner.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'news-category.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'news-media.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'news-post.index' ? 'active' : '' }}
                            " href="#" aria-expanded="false"><i class="mdi mdi-clock-alert"></i> News & Events <span class="label label-rouded label-light-danger pull-right"> 4</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a class="{{ Route::currentRouteName() === 'news-banner.index' ? 'active' : '' }}" href="{{route('news-banner.index')}}">Banner</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'news-category.index' ? 'active' : '' }}" href="{{route('news-category.index')}}">Categories</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'news-media.index' ? 'active' : '' }}" href="{{route('news-media.index')}}">Media</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'news-post.index' ? 'active' : '' }}" href="{{route('news-post.index')}}">Posts</a></li>
                                </ul>
                            </li>
                            <li> <a class="has-arrow waves-effect waves-dark
                            {{ Route::currentRouteName() === 'case-banner.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'case-category.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'case-media.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'case-study.index' ? 'active' : '' }}
                             " href="#" aria-expanded="false"><i class="mdi mdi-calendar"></i> Case Studies <span class="label label-rouded label-light-megna pull-right"> 4</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a class="{{ Route::currentRouteName() === 'case-banner.index' ? 'active' : '' }}" href="{{route('case-banner.index')}}">Banner</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'case-category.index' ? 'active' : '' }}" href="{{route('case-category.index')}}">Categories</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'case-media.index' ? 'active' : '' }}" href="{{route('case-media.index')}}">Media</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'case-study.index' ? 'active' : '' }}" href="{{route('case-study.index')}}">Cases</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->role->name == 'Editor' || Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Viewer')
                    <li class="nav-small-cap">Contacts / Footer</li>
                    <li> <a class="has-arrow waves-effect waves-dark
                    {{ Route::currentRouteName() === 'contact-banner.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'contact-header.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'contact-request.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'contact-details.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'contact-map.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'footer-logo.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'footer-title.index' ? 'active' : '' }}
                    {{ Route::currentRouteName() === 'footer-social.index' ? 'active' : '' }}
                     " href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i>
                            <span class="hide-menu">Contact & Footer <span class="label label-rouded label-success pull-right"> 8</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a class="has-arrow
                            {{ Route::currentRouteName() === 'contact-banner.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'contact-header.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'contact-request.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'contact-details.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'contact-map.index' ? 'active' : '' }}
                             " href="#"> Contact Page <span class="label label-rouded label-light-success pull-right"> 5</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a class="{{ Route::currentRouteName() === 'contact-banner.index' ? 'active' : '' }}" href="{{route('contact-banner.index')}}">Banner</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'contact-header.index' ? 'active' : '' }}" href="{{route('contact-header.index')}}">Header</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'contact-request.index' ? 'active' : '' }}" href="{{route('contact-request.index')}}">Request Titles</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'contact-details.index' ? 'active' : '' }}" href="{{route('contact-details.index')}}">Details</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'contact-map.index' ? 'active' : '' }}" href="{{route('contact-map.index')}}">Map</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow
                            {{ Route::currentRouteName() === 'footer-logo.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'footer.index' ? 'active' : '' }}
                            {{ Route::currentRouteName() === 'footer-social.index' ? 'active' : '' }}
                             " href="#">Footer <span class="label label-rouded label-light-success pull-right"> 3</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a class="{{ Route::currentRouteName() === 'footer-logo.index' ? 'active' : '' }}" href="{{route('footer-logo.index')}}">Logo</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'footer-title.index' ? 'active' : '' }}" href="{{route('footer-title.index')}}">Content</a></li>
                                    <li><a class="{{ Route::currentRouteName() === 'footer-social.index' ? 'active' : '' }}" href="{{route('footer-social.index')}}">Socials</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->role->name == 'HR' || Auth::user()->role->name == 'Administrator')
                <li class="nav-small-cap">HR Job Management</li>
                <li class="
                   {{ Route::currentRouteName() === 'brand-media.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-category.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-location.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-salary.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-type.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'job-board.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'career-contact.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'candidate.index' ? 'active' : '' }}
                   {{ Route::currentRouteName() === 'email-configuration.index' ? 'active' : '' }}
                    ">
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Job Board<span class="label label-rouded label-danger pull-right">11</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="{{ Route::currentRouteName() === 'brand-media.index' ? 'active' : '' }}"><a href="{{route('brand-media.index')}}">Brand Media</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-category.index' ? 'active' : '' }}"><a href="{{route('job-category.index')}}">Job Category</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-location.index' ? 'active' : '' }}"><a href="{{route('job-location.index')}}">Job Location</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-salary.index' ? 'active' : '' }}"><a href="{{route('job-salary.index')}}">Job Salary</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-type.index' ? 'active' : '' }}"><a href="{{route('job-type.index')}}">Job Type</a></li>
                        <li class="{{ Route::currentRouteName() === 'job-board.index' ? 'active' : '' }}"><a href="{{route('job-board.index')}}">Careers</a></li>
                        @if(Auth::user()->role->name == 'Administrator')
                        <li class="{{ Route::currentRouteName() === 'career-contact.index' ? 'active' : '' }}"><a href="{{route('career-contact.index')}}">Careers Email Configuration</a></li>
                        @endif
                        @if(Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Editor')
                        <li class="{{ Route::currentRouteName() === 'cc-configuration.index' ? 'active' : '' }}"><a href="{{route('cc-configuration.index')}}">CC Email Configuration</a></li>
                        <li class="{{ Route::currentRouteName() === 'bcc-configuration.index' ? 'active' : '' }}"><a href="{{route('bcc-configuration.index')}}">BCC Email Configuration</a></li>
                        <li class="{{ Route::currentRouteName() === 'email-configuration.index' ? 'active' : '' }}"><a href="{{route('email-configuration.index')}}">Email Configuration</a></li>
                        @endif
                        <li class=" {{ Route::currentRouteName() === 'candidate.index' ? 'active' : '' }}"><a href="{{route('candidate.index')}}">Candidates</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->role->name == 'Administrator')
                <li class="nav-small-cap">SEO Management</li>
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
                    </ul>
                   @endif
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
