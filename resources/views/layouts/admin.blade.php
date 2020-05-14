<!DOCTYPE html>
<html lang="en">
@include('admin.header.header')
<body class="fix-header fix-sidebar card-no-border">
@include('admin.preloader.preloader')
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
@include('admin.topbar.topbar')
@include('admin.navbar.navbar')
@yield('content')
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@include('admin.scripts.scripts')
@yield('scripts')

</body>

</html>
