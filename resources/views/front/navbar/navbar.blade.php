<!-- Sidebar Menu-->
<div class="menu">
    <span class="close-menu icon-cross2 right-boxed"></span>
    <div class="menu-lang right-boxed">
{{--        @foreach (config('app.available_locales') as $locale)--}}
{{--            <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"--}}
{{--               class=" @if (app()->getLocale() == $locale) active @endif">{{ strtoupper($locale) }}</a>--}}
{{--        @endforeach--}}
    </div>
    <ul class="menu-list right-boxed">
        <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
            <a  href="{{route('home', app()->getLocale())}}">Home</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}">
            <a  href="{{route('about', app()->getLocale())}}">About Us</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'service' ? 'active' : '' }}">
            <a  href="{{route('service', app()->getLocale())}}">Services</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'project' ? 'active' : '' }}">
            <a  href="{{route('project', app()->getLocale())}}">Projects</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'brochures' ? 'active' : '' }}">
            <a  href="{{route('brochures', app()->getLocale())}}">Brochures</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'careers' ? 'active' : '' }}">
            <a  href="{{route('careers', app()->getLocale())}}">Careers</a>
        </li>
        <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
            <a  href="{{route('contact', app()->getLocale())}}">Contact Us</a>
        </li>
    </ul>
    <div class="menu-footer right-boxed">
        <div class="social-list">
            <a href="" class="icon ion-social-twitter"></a>
            <a href="" class="icon ion-social-facebook"></a>
            <a href="" class="icon ion-social-googleplus"></a>
            <a href="" class="icon ion-social-linkedin"></a>
            <a href="" class="icon ion-social-dribbble-outline"></a>
        </div>
        <div class="copy">© General International Group 2020. All Rights Reseverd<br></div>
    </div>
</div>

<!-- Navbar -->
<header class="navbar boxed js-navbar">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="brand" href="{{route('home', app()->getLocale())}}">
        <img alt="general international group logo" src="{{asset('public/assets/front/images/header-logo.png')}}" width="110">
        <div class="brand-info">
            <div class="brand-name"></div>
            <div class="brand-text"></div>
        </div>
    </a>
    <div class="social-list hidden-xs">
        <a href="" class="icon ion-social-twitter"></a>
        <a href="" class="icon ion-social-facebook"></a>
        <a href="" class="icon ion-social-googleplus"></a>
        <a href="" class="icon ion-social-linkedin"></a>
        <a href="" class="icon ion-social-dribbble-outline"></a>
    </div>
    <div class="navbar-spacer hidden-sm hidden-xs"></div>
    <div class="menu-lang right-boxed hidden-xs float-right mr-5" style="margin-right: 4%!important;">
{{--        @foreach (config('app.available_locales') as $locale)--}}
{{--            <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"--}}
{{--               class=" @if (app()->getLocale() == $locale) active @endif">{{ strtoupper($locale) }}</a>--}}
{{--        @endforeach--}}
    </div>
</header>
