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
    <!-- Section -->
    <section class="page-section">
        <div class="container relative">

            <div class="row">

                <!-- Content -->
                <div class="col-sm-10 col-sm-offset-1">

                    <!-- Post -->
                    <div class="blog-item mb-80 mb-xs-40">

                        <!-- Text -->
                        <div class="blog-item-body">

                            <h1 class="mt-0 font-alt">
                                @if (app()->getLocale() == 'en')
                                    {{$news_post->getTranslation('title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$news_post->getTranslation('title', 'ar')}}
                                @endif
                            </h1>
                            <!-- End Text -->

                            <!-- Media Gallery -->
                            <div class="blog-media mt-40 mb-40 mb-xs-30">
                                <ul class="clearlist content-slider">
                                    @foreach($news_medias as $news_media)
                                     @if($news_media->post_id == $news_post->id)
                                    <li>
                                         <img src="{{$news_media->media}}" alt="" />
                                    </li>
                                     @endif
                                     @endforeach
                                </ul>
                            </div>

                            <div class="lead">
                                @if (app()->getLocale() == 'en')
                                    {{$news_post->getTranslation('title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$news_post->getTranslation('title', 'ar')}}
                                @endif
                            </div>
                            @if (app()->getLocale() == 'en')
                                {!! $news_post->getTranslation('description', 'en') !!}
                            @elseif(app()->getLocale() == 'ar')
                                {!! $news_post->getTranslation('description', 'ar') !!}
                            @endif
                        </div>
                        <!-- End Text -->

                    </div>
                    <!-- End Post -->

                </div>
                <!-- End Content -->

            </div>

        </div>
    </section>
    <!-- End Section -->


    <!-- Divider -->
    <hr class="mt-0 mb-0"/>
    <!-- End Divider -->
@stop
