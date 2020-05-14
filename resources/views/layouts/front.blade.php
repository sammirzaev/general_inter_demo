<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('front.header.header')
<body>
<div class="animsition">
    <div class="wrapper boxed-inner">
        <!-- Content CLick Capture-->
        <div class="click-capture"></div>
@include('front.navbar.navbar')
        <!-- Jumbotron -->

@yield('content')
       <div class="boxed">
           @include('front.footer.footer')
       </div>
    </div>
</div>
@include('front.scripts.scripts')
@yield('scripts')
</body>
</html>
