@extends('layouts.front')
@section('content')
    <!-- Head Section -->
    @foreach($case_banners as $case_banner)
        @if($case_banner->is_publish == 1)
            <section class="page-section bg-dark-alfa-30 parallax-3"
                     data-background="{{$case_banner->banner}}">
                <div class="relative container align-center mt-120 mb-120">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                @if (app()->getLocale() == 'en')
                                    {{$case_banner->getTranslation('head_title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$case_banner->getTranslation('head_title', 'ar')}}
                                @endif
                            </h1>
                            <div class="hs-line-4 font-alt">
                                @if (app()->getLocale() == 'en')
                                    {{$case_banner->getTranslation('title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$case_banner->getTranslation('title', 'ar')}}
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @else
            <section class="page-section bg-dark-alfa-30 parallax-3"
                     data-background="{{asset('assets/front/images/full-width-images/section-bg-17.jpg')}}">
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
            <h2 class="section-title font-alt mb-70 mb-sm-40"></h2>
            <!-- Row -->
            <div class="row">
                <!-- Col -->
                <div class="col-sm-12  col-lg-12">
                    <div class="align-center mb-40 mb-xs-30">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tbl-custom-style animate">
                            @foreach($case_cats as $case_cat)
                            @if($case_cat->is_publish == 1)
                            <li class="{{ $loop->first ? 'active' : '' }}">
                                <a href="#tabs{{$case_cat->id}}" data-toggle="tab">
                                    @if (app()->getLocale() == 'en')
                                        {{$case_cat->getTranslation('title', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$case_cat->getTranslation('title', 'ar')}}
                                    @endif
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont align-left section-text">
                        @foreach($case_studies as $case_study)
                        @if($case_study->is_publish == 1)
                        <div class="tab-pane fade in {{ $loop->first ? 'active' : '' }}" id="tabs{{$case_study->cat_id}}">
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
                                                            {{$case_study->getTranslation('title', 'en')}}
                                                        @elseif(app()->getLocale() == 'ar')
                                                            {{$case_study->getTranslation('title', 'ar')}}
                                                        @endif
                                                    </h1>
                                                    <!-- End Text -->
                                                    <!-- Media Gallery -->
                                                    <div class="blog-media mt-40 mb-40 mb-xs-30">
                                                        <ul class="clearlist content-slider">
                                                            @foreach($case_medias as $case_media)
                                                            @if($case_media->is_publish == 1)
                                                            @if($case_media->category->id == $case_study->cat_id)
                                                            <li>
                                                                <img src="{{$case_media->media}}" alt="" />
                                                            </li>
                                                            @endif
                                                            @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="lead">
                                                        @if (app()->getLocale() == 'en')
                                                            {{$case_study->getTranslation('title', 'en')}}
                                                        @elseif(app()->getLocale() == 'ar')
                                                            {{$case_study->getTranslation('title', 'ar')}}
                                                        @endif
                                                    </div>
                                                    @if (app()->getLocale() == 'en')
                                                        {!! $case_study->getTranslation('description', 'en') !!}
                                                    @elseif(app()->getLocale() == 'ar')
                                                        {!! $case_study->getTranslation('description', 'ar') !!}
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
                        </div>
                        @endif
                        @endforeach
                        </div>
                    </div>

                </div>

                <!-- End Col -->

            </div>
            <!-- End Row -->

        </div>
    </section>
    <!-- End Section -->
    <!-- Divider -->
    <hr class="mt-0 mb-0 "/>
    <!-- End Divider -->
@stop
