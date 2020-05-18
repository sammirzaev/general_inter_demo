<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/admin/assets/images/header-logo.png')}}">
    <title>GIG Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/dropify/dist/css/dropify.min.css')}}">
    <!-- Footable CSS -->
    <link href="{{asset('assets/admin/assets/plugins/footable/css/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet"/>
    <!-- morris CSS -->
    <link href="{{asset('assets/admin/assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/plugins/html5-editor/bootstrap-wysihtml5.css')}}" />
    <!-- Custom CSS -->
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('assets/admin/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    @yield('styles')
</head>
