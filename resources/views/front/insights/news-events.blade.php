@extends('layouts.front')
@section('content')
    <!-- Head Section -->
    @foreach($news_banners as $news_banner)
        @if($news_banner->is_publish == 1)
            <section class="page-section bg-dark-alfa-30 parallax-3"
                     data-background="{{$news_banner->banner}}">
                <div class="relative container align-center mt-120 mb-120">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                @if (app()->getLocale() == 'en')
                                    {{$news_banner->getTranslation('head_title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$news_banner->getTranslation('head_title', 'ar')}}
                                @endif
                            </h1>
                            <div class="hs-line-4 font-alt">
                                @if (app()->getLocale() == 'en')
                                    {{$news_banner->getTranslation('title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$news_banner->getTranslation('title', 'ar')}}
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @else
            <section class="page-section bg-dark-alfa-30 parallax-3"
                     data-background="{{asset('assets/front/images/full-width-images/section-bg-2.jpg')}}">
                <div class="relative container align-center mt-120 mb-120">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                Banner Unpublished
                            </h1>
                            <div class="hs-line-4 font-alt">
                                Please Contact with Admin
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
    <!-- End Head Section -->
    <!-- Search Section -->
    <section class="small-section">
        <div class="container relative">
            <!-- Search -->
            <form class="form-inline form" role="form">
                <div class="search-wrap">
                    <button class="search-button animate" type="submit" title="Start Search">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" class="form-control search-field" name="search" value="{{isset($search) ? $search : ''}}" placeholder="Search...">
                </div>
            </form>
            <!-- End Search -->
        </div>
    </section>
    <!-- End Search Section -->

    <!-- Divider -->
    <hr class="mt-0 mb-0"/>
    <!-- End Divider -->


    <!-- Section -->
    <section class="page-section">
        <div class="container relative">
            <div class="row multi-columns-row">
            @foreach($news_posts as $news_post)
                @if($news_post->is_publish == 1)
                <!-- Post Item -->
                <div class="col-sm-6 col-md-4 col-lg-4 mb-60 mb-xs-40">

                    <div class="post-prev-img">
                        <a href="#">
                            <img src="{{$news_post->media->media}}"
                                 alt="@if (app()->getLocale() == 'en')
                                 {{$news_post->getTranslation('title', 'en')}}
                                 @elseif(app()->getLocale() == 'ar')
                                 {{$news_post->getTranslation('title', 'ar')}}
                                 @endif"
                            width="360" height="200"/>
                        </a>
                    </div>

                    <div class="post-prev-title font-alt">
                        <a href="#">
                            @if (app()->getLocale() == 'en')
                                {{$news_post->getTranslation('title', 'en')}}
                            @elseif(app()->getLocale() == 'ar')
                                {{$news_post->getTranslation('title', 'ar')}}
                            @endif
                        </a>
                    </div>
                    <div class="post-prev-info font-alt">
                        <a href="#">
                            {{$news_post->created_at->toFormattedDateString()}}
                        </a>
                    </div>

                    <div class="post-prev-text">
                        @if (app()->getLocale() == 'en')
                            {!! Str::limit($news_post->getTranslation('description', 'en'), 150, ' ...') !!}
                        @elseif(app()->getLocale() == 'ar')
                            {!! Str::limit($news_post->getTranslation('description', 'ar'), 150, ' ...') !!}
                        @endif
                    </div>

                    <div class="post-prev-more">
                        <a href="{{route('news_single', [app()->getLocale(), $news_post->slug])}}" class="btn btn-mod btn-gray btn-round">
                            Read More <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End Post Item -->
                @endif
            @endforeach
            </div>
            <!-- Pagination -->
            <div class="pagination pg-dark pagination-lg">
                {{$news_posts->render()}}
            </div>
            <!-- End Pagination -->
        </div>
    </section>
    <!-- End Section -->


    <!-- Divider -->
    <hr class="mt-0 mb-0"/>
    <!-- End Divider -->
@stop
@section('styles')
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
    <style>
        .pagination{
            font-family: 'Orbitron', sans-serif;
            font-weight: 700!important;
            border:none!important;
        }
    </style>
@stop
