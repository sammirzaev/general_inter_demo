@extends('layouts.front')
@section('content')
    <!-- Head Section -->
    @foreach($about_banners as $about_banner)
    @if($about_banner->is_publish == 1)
    <section class="page-section bg-dark-alfa-50 parallax-3" data-background="{{$about_banner->banner}}">
        <div class="relative container align-center mt-120 mb-120">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0" >
                        @if (app()->getLocale() == 'en')
                            {{$about_banner->getTranslation('head_title', 'en')}}
                        @elseif(app()->getLocale() == 'ar')
                            {{$about_banner->getTranslation('head_title', 'ar')}}
                        @endif
                    </h1>
                    <div class="hs-line-4 font-alt">
                        @if (app()->getLocale() == 'en')
                            {{$about_banner->getTranslation('title', 'en')}}
                        @elseif(app()->getLocale() == 'ar')
                            {{$about_banner->getTranslation('title', 'ar')}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
        <section class="page-section bg-dark-alfa-50 parallax-3" data-background="{{asset('assets/front/images/full-width-images/section-bg-2.jpg')}}">
            <div class="relative container align-center mt-120 mb-120">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="hs-line-11 font-alt mb-20 mb-xs-0" >
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
    <!-- About Section -->

    <section class="page-section">
        <div class="container relative">
            <!-- Features Grid -->
            <div class="row multi-columns-row alt-features-grid">
                <!-- Features Item -->
                @foreach($about_concepts as $about_concept)
                @if($about_concept->is_publish == 1)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="alt-features-item align-center">
                        <div class="alt-features-icon">
                            {!! $about_concept->icon !!}
                        </div>
                        <h3 class="alt-features-title font-alt" style="color:#008080;">
                            @if (app()->getLocale() == 'en')
                                {{$about_concept->getTranslation('title', 'en')}}
                            @elseif(app()->getLocale() == 'ar')
                                {{$about_concept->getTranslation('title', 'ar')}}
                            @endif
                        </h3>
                        <div class="alt-features-descr align-justify text-justify">
                            @if (app()->getLocale() == 'en')
                                {!! $about_concept->getTranslation('description', 'en') !!}
                            @elseif(app()->getLocale() == 'ar')
                                {!! $about_concept->getTranslation('description', 'ar') !!}
                            @endif
                        </div>
                    </div>
                </div>
                @endif
               @endforeach
                <!-- End Features Item -->
            </div>
            <!-- End Features Grid -->

        </div>
    </section>

    <!-- End About Section -->
    <!-- Story Section -->
    <section class="page-section">
        <div class="container relative">
            <h2 class="section-title font-alt mb-70 mb-sm-40">
                @foreach($about_story_cats as $about_story_cat)
                @if($loop->first)
                        @if (app()->getLocale() == 'en')
                            {!! $about_story_cat->getTranslation('title', 'en') !!}
                        @elseif(app()->getLocale() == 'ar')
                            {!! $about_story_cat->getTranslation('title', 'ar') !!}
                        @endif
                @endif
                @endforeach
            </h2>
            <!-- Our Story -->
            <div class="row">
                <!-- Col -->
                <div class="col-sm-8 col-lg-12 col-sm-offset-2 col-lg-offset-0 nav-tabs-justified">
                    <!-- Nav Tabs -->
                    <div class="align-center mb-40 mb-xxs-30">
                        <ul class="nav nav-tabs tbl-custom-style animate">
                            @foreach($about_story_cats as $about_story_cat)
                             @if($about_story_cat->is_publish == 1)
                                <li class="{{ $loop->first ? 'active' : '' }}">
                                    <a href="#{{$about_story_cat->id}}" data-toggle="tab">
                                        @if (app()->getLocale() == 'en')
                                            {!! $about_story_cat->getTranslation('story_cat', 'en') !!}
                                        @elseif(app()->getLocale() == 'ar')
                                            {!! $about_story_cat->getTranslation('story_cat', 'ar') !!}
                                        @endif
                                    </a>
                                </li>
                             @endif
                             @endforeach
                        </ul>
                    </div>
                    <!-- End Nav Tabs -->
                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont section-text align-left">
                        @foreach($about_companies as $about_company)
                        <div class="tab-pane fade in {{ $loop->first ? 'active' : '' }}" id="{{$about_company->story->id}}">
                            @foreach($about_companies as $about_company)
                            <h3>
                                @if (app()->getLocale() == 'en')
                                    {!! $about_company->getTranslation('title', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_company->getTranslation('title', 'ar') !!}
                                @endif
                            </h3>
                            <p>
                                @if (app()->getLocale() == 'en')
                                    {!! $about_company->getTranslation('description', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_company->getTranslation('description', 'ar') !!}
                                @endif
                            </p>
                            @endforeach
                        </div>
                        @endforeach
                        @foreach($about_diversity_ones as $about_diversity_one)
                        <div class="tab-pane fade" id="{{$about_diversity_one->story->id}}">
                            @if($about_diversity_one->is_publish == 1)
                            <h3 style="margin-bottom: 20px!important;">
                                @if (app()->getLocale() == 'en')
                                    {!! $about_diversity_one->getTranslation('title', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_diversity_one->getTranslation('title', 'ar') !!}
                                @endif
                            </h3>
                            <p>
                                @if (app()->getLocale() == 'en')
                                    {!! $about_diversity_one->getTranslation('description', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_diversity_one->getTranslation('description', 'ar') !!}
                                @endif
                            </p>
                             @endif
                            <!-- Features Grid -->
                            <div class="row alt-features-grid mb-70 mb-xs-40">
                                <!-- Features Item -->
                                @foreach($about_diversity_icons as $about_diversity_icon)
                                @if($about_diversity_icon->is_publish == 1)
                                <div class="col-sm-3">
                                    <div class="alt-features-item align-center mt-120">
                                        <div class="alt-features-icon">
                                            <span class="{{$about_diversity_icon->icon}}"></span>
                                        </div>
                                        <h3 class="alt-features-title font-alt">
                                            @if (app()->getLocale() == 'en')
                                                {!! $about_diversity_icon->getTranslation('title', 'en') !!}
                                            @elseif(app()->getLocale() == 'ar')
                                                {!! $about_diversity_icon->getTranslation('title', 'ar') !!}
                                            @endif
                                        </h3>
                                    </div>
                                </div>
                                 @endif
                                @endforeach
                                <!-- End Features Item -->
                            </div>
                            <!-- End Features Grid -->
                            @foreach($about_diversity_twos as $about_diversity_two)
                             @if($about_diversity_two->is_publish == 1)
                            <h3 style="margin-bottom: 20px!important; margin-top: 20px!important;">
                                @if (app()->getLocale() == 'en')
                                    {!! $about_diversity_two->getTranslation('title', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_diversity_two->getTranslation('title', 'ar') !!}
                                @endif
                            </h3>
                            <p>
                                @if (app()->getLocale() == 'en')
                                    {!! $about_diversity_two->getTranslation('description', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_diversity_two->getTranslation('description', 'ar') !!}
                                @endif
                            </p>
                           @endif
                           @endforeach
                        </div>
                        @endforeach
                        @foreach($about_leaderships as $about_leadership)
                        <div class="tab-pane fade" id="{{$about_leadership->story->id}}">
                            @foreach($about_leaderships as $about_leadership)
                            <h3>
                                @if (app()->getLocale() == 'en')
                                    {!! $about_leadership->getTranslation('title', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_leadership->getTranslation('title', 'ar') !!}
                                @endif
                            </h3>
                            <p>
                                @if (app()->getLocale() == 'en')
                                    {!! $about_leadership->getTranslation('description', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_leadership->getTranslation('description', 'ar') !!}
                                @endif
                            </p>
                           @endforeach
                            <!-- Section -->
                            <section class="page-section">
                                <div class="container relative">
                                    <!-- Photo Grid -->
                                    <div class="row multi-columns-row mb-30 mb-xs-10">
                                        <!-- Photo Item -->
                                        @foreach($about_leadership_medias as $about_leadership_media)
                                        <div class="col-md-4 col-lg-4 mb-md-10">
                                            <div class="post-prev-img">
                                                <a href="{{$about_leadership_media->media}}" class="lightbox-gallery-2 mfp-image">
                                                    <img src="{{$about_leadership_media->media}}" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- End Photo Item -->
                                    </div>
                                    <!-- End Photo Grid -->
                                </div>
                            </section>
                            <!-- End Section -->
                        </div>
                        @endforeach
                        @foreach($about_timeline_cats as $about_timeline_cat)
                        <div class="tab-pane fade" id="{{$about_timeline_cat->story->id}}">
                            <!-- start work experience -->
                            <div class="container experience"><!-- start container experience -->
                                <div class="row"><!-- start row experience -->
                                    <div class="col-md-12"><!-- start div experience -->
                                        <section class="cd-horizontal-timeline col-md-12">
                                            <div class="timeline">
                                                <div class="events-wrapper col-md-11">
                                                    <div class="events col-md-10" style="width: 1000px!important;">
                                                        <ol>
                                                            @foreach($about_timeline_cats as $about_timeline_cat)
                                                             @if($about_timeline_cat->is_publish == 1)
                                                            <li class="timeline-dis">
                                                                <a href="#{{$about_timeline_cat->id}}" data-date="{{ $about_timeline_cat->date }}" class="{{ $loop->first ? 'selected' : '' }}">
                                                                    <span class="icon-timeline">
                                                                        @if (app()->getLocale() == 'en')
                                                                            {!! $about_timeline_cat->getTranslation('year', 'en') !!}
                                                                        @elseif(app()->getLocale() == 'ar')
                                                                            {!! $about_timeline_cat->getTranslation('year', 'ar') !!}
                                                                        @endif
                                                                    </span>
                                                                </a>
                                                            </li>
                                                             @endif
                                                            @endforeach
                                                        </ol>
                                                        <span class="filling-line" aria-hidden="true"></span>
                                                    </div> <!-- .events -->
                                                </div> <!-- .events-wrapper -->
                                            </div> <!-- .timeline -->

                                            <div class="events-content">
                                                <ol>
                                                    @foreach($about_timelines as $about_timeline)
                                                    @if($about_timeline->is_publish == 1)
                                                    <li class="{{ $loop->first ? 'selected' : '' }}" id="{{$about_timeline->date->id}}" data-date="{{$about_timeline->date->date}}">
                                                        <h5>
                                                            @if (app()->getLocale() == 'en')
                                                                {!! $about_timeline->getTranslation('title', 'en') !!}
                                                            @elseif(app()->getLocale() == 'ar')
                                                                {!! $about_timeline->getTranslation('title', 'ar') !!}
                                                            @endif
                                                            <img src="{{$about_timeline->media}}">
                                                        </h5>
                                                        <em>
                                                            @if (app()->getLocale() == 'en')
                                                                {!! $about_timeline->timeline->getTranslation('year', 'en') !!}
                                                            @elseif(app()->getLocale() == 'ar')
                                                                {!! $about_timeline->timeline->getTranslation('year', 'ar') !!}
                                                            @endif
                                                        </em>
                                                        <p>
                                                            @if (app()->getLocale() == 'en')
                                                                {!! $about_timeline->getTranslation('description', 'en') !!}
                                                            @elseif(app()->getLocale() == 'ar')
                                                                {!! $about_timeline->getTranslation('description', 'ar') !!}
                                                            @endif
                                                        </p>
                                                    </li>
                                                     @endif
                                                    @endforeach
                                                </ol>
                                            </div> <!-- .events-content -->
                                        </section>
                                    </div> <!-- end div experience -->
                                </div> <!-- end row experience -->
                            </div> <!-- end container experience -->
                            <!-- end work experience -->
                        </div>
                        @endforeach
                        @foreach($about_policies as $about_policy)
                        <div class="tab-pane fade" id="{{$about_policy->story->id}}">
                            @foreach($about_policies as $about_policy)
                                @if (app()->getLocale() == 'en')
                                    {!! $about_policy->getTranslation('description', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $about_policy->getTranslation('description', 'ar') !!}
                                @endif
                            @endforeach
                        </div>
                        @endforeach
                    </div>

                </div>

                <!-- End Col -->

            </div>
            <!-- End Story -->

        </div>
    </section>
    <!-- End Story Section -->
@stop

