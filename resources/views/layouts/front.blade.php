<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('front.header.header')
<body class="appear-animate">
<!-- Page Loader -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- End Page Loader -->
<!-- Page Wrap -->
<div class="page" id="top">
    @include('front.navbar.navbar')
    @yield('content')
    @include('front.footer.footer')
</div>
<!-- End Page Wrap -->
@include('front.scripts.scripts')
</body>
</html>
