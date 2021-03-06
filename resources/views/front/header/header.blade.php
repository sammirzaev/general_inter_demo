<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    @foreach($meta_desc as $desc)
        @if($desc->is_publish == 1)
          <meta name="description" content="{{$desc->descriptions}}">
        @endif
    @endforeach
    @foreach($meta_key as $key)
        @if($key->is_publish == 1)
           <meta name="keywords" content="{{$key->keywords}}"/>
        @endif
    @endforeach
    <meta name="author" content="General International Group">
    @foreach($sub_copy as $sub)
        @if($sub->is_publish == 1)
           <meta name="subject" content="{{$sub->subject}}">
        @endif
    @endforeach
    @foreach($sub_copy as $copy)
        @if($copy->is_publish == 1)
           <meta name="copyright"content="{{$copy->copyright}}">
        @endif
    @endforeach
    @foreach($url_dist_cov as $url)
        @if($url->is_publish == 1)
            <meta name="url" content="{{$url->url}}">
        @endif
    @endforeach
    @foreach($url_dist_cov as $dist)
        @if($dist->is_publish == 1)
            <meta name="distribution" content="{{$dist->distribution}}">
        @endif
    @endforeach
    @foreach($url_dist_cov as $cov)
        @if($copy->is_publish == 1)
            <meta name="coverage" content="{{$cov->coverage}}">
        @endif
    @endforeach
    @foreach($og_title as $ogtitle)
        @if($ogtitle->is_publish == 1)
            <meta name="og:title" content="{{$ogtitle->title}}"/>
        @endif
    @endforeach
    @foreach($og_type_url_img as $type)
        @if($type->is_publish == 1)
            <meta name="og:type" content="{{$type->type}}"/>
        @endif
    @endforeach
    @foreach($og_type_url_img as $url)
        @if($url->is_publish == 1)
            <meta name="og:url" content="{{$url->url}}"/>
        @endif
    @endforeach
    @foreach($og_type_url_img as $img)
        @if($img->is_publish == 1)
            <meta name="og:image" content="{{$img->image}}"/>
        @endif
    @endforeach
    @foreach($og_site_desc as $ogsite)
        @if($ogsite->is_publish == 1)
            <meta name="og:site_name" content="{{$ogsite->site_name}}"/>
        @endif
    @endforeach
    @foreach($og_site_desc as $ogdesc)
        @if($ogdesc->is_publish == 1)
            <meta name="og:description" content="{{$ogdesc->description}}"/>
        @endif
    @endforeach
    @foreach($google_verify as $verify)
        @if($verify->is_publish == 1)
            <meta name="google-site-verification" content="{{$verify->verify}}">
        @endif
    @endforeach
    @foreach($facebooks as $facebook)
        @if($facebook->is_publish == 1)
            <meta name="fb:app_id" content="{{$facebook->facebook}}" />
        @endif
    @endforeach
    @foreach($robots as $robot)
        @if($robot->is_publish == 1)
            <meta name="robots" content="{{$robot->robots}}" />
        @endif
    @endforeach
    @foreach($twitter_card as $card)
        @if($card->is_publish == 1)
            <meta name="twitter:card" content="{{$card->twit_card}}">
        @endif
    @endforeach
    @foreach($twitter_doms as $domain)
        @if($domain->is_publish == 1)
            <meta name="twitter:domain" content="{{$domain->twit_dom}}">
        @endif
    @endforeach
    @foreach($twitter_doms as $url)
        @if($url->is_publish == 1)
            <meta name="twitter:url" content="{{$url->twit_url}}">
        @endif
    @endforeach
    @foreach($twitter_site as $site_url)
        @if($site_url->is_publish == 1)
            <meta name="twitter:site" content="{{$site_url->twit_site}}">
        @endif
    @endforeach
    @foreach($twitter_site as $img_url)
        @if($img_url->is_publish == 1)
            <meta name="twitter:image" content="{{$img_url->twit_img}}">
        @endif
    @endforeach
    @foreach($twitter_title as $title_twit)
        @if($title_twit->is_publish == 1)
            <meta name="twitter:title" content="{{$title_twit->twit_title}}">
        @endif
    @endforeach
    @foreach($twitter_title as $desc_twit)
        @if($desc_twit->is_publish == 1)
            <meta name="twitter:description" content="{{$desc_twit->twit_desc}}">
        @endif
    @endforeach
        <!-- Favicons -->
        <link rel="shortcut icon" href="{{asset('assets/front/images/favicon/favicon.ico')}}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/front/images/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/front/images/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/front/images/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/front/images/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/front/images/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/front/images/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/front/images/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/front/images/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/front/images/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/front/images/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/front/images/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/front/images/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/front/images/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('assets/front/images/favicon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('assets/front//ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/timeline.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/style-responsive.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/vertical-rhythm.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
        <!-- Latest compiled and minified CSS 3.3.4 -->
        <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.3.3.4.css')}}">
        <!-- Optional theme -->
        <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap-theme.min.css')}}">
    <link href="{{asset('assets/admin/assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <title>
        @foreach($title as $titles)
            @if($titles->is_publish == 1)
            @if (app()->getLocale() == 'en')
            {{$titles->getTranslation('title', 'en')}}
            @elseif(app()->getLocale() == 'ar')
            {{$titles->getTranslation('title', 'ar')}}
            @endif
            @else
                General International Group
            @endif
        @endforeach
    </title>
    <!-- Styles -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Analytics Tag Manager -->
        @foreach($analytics as $analytic)
            @if($analytic->is_publish == 1)
                {!! $analytic->header !!}
            @endif
        @endforeach
<!--End Google Analytics Tag Manager -->
<!-- Google Tag Manager -->
    @foreach($tag_managers as $tag_manager)
        @if($tag_manager->is_publish == 1)
            {!! $tag_manager->gtm_header !!}
        @endif
    @endforeach
<!--End Google Tag Manager -->
 <!-- Header Space Feature -->
@foreach($header_space as $header_sp)
    @if($header_sp->is_publish == 1)
       {!! $header_sp->header_space !!}
    @endif
 @endforeach
<!--End Header Space Feature -->
    @yield('styles')
</head>

