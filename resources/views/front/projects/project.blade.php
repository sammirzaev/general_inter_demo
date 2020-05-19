@extends('layouts.front')
@section('content')
    <!-- Head Section -->
    @foreach($project_banners as $project_banner)
        @if($project_banner->is_publish == 1)
            <section class="page-section bg-dark-alfa-30 parallax-3"
                     data-background="{{$project_banner->banner}}">
                <div class="relative container align-center mt-120 mb-120">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                @if (app()->getLocale() == 'en')
                                    {{$project_banner->getTranslation('head_title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$project_banner->getTranslation('head_title', 'ar')}}
                                @endif
                            </h1>
                            <div class="hs-line-4 font-alt">
                                @if (app()->getLocale() == 'en')
                                    {{$project_banner->getTranslation('title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$project_banner->getTranslation('title', 'ar')}}
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
    <!-- Portfolio Section -->
    <section class="page-section">
        <div class="container relative">
            <!-- Works Filter -->
            <div class="works-filter font-alt align-center mb-20 mt-50">
                @foreach($project_cats as $project_cat)
                @if($loop->first)
                <a href="#" class="filter active" data-filter="*">
                    @if (app()->getLocale() == 'en')
                        {{$project_cat->getTranslation('title', 'en')}}
                    @elseif(app()->getLocale() == 'ar')
                        {{$project_cat->getTranslation('title', 'ar')}}
                    @endif
                </a>
                @endif
                @endforeach
                @foreach($project_cats as $project_cat)
                @if($project_cat->is_publish == 1)
                @if($project_cat->id > 1)
                <a href="#cat{{$project_cat->id}}" class="filter {{$loop->first ? 'active': ''}}" data-filter=".cat{{$project_cat->id}}" style="margin-bottom: 2%!important;">
                    @if (app()->getLocale() == 'en')
                        {{$project_cat->getTranslation('title', 'en')}}
                    @elseif(app()->getLocale() == 'ar')
                        {{$project_cat->getTranslation('title', 'ar')}}
                    @endif
                </a>
                @endif
                @endif
                @endforeach
            </div>
            <!-- End Works Filter -->

            <!-- Works Grid -->
            <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white" id="work-grid">
                <!-- Work Item (Lightbox) -->
                @foreach($projects as $project)
                @if($project->is_publish == 1)
                <li class="work-item mix cat{{$project->cat_id}}">
                    <a href="{{$project->media}}" class="work-lightbox-link mfp-image">
                        <div class="work-img">
                            <img src="{{$project->media}}"
                                 alt=" @if (app()->getLocale() == 'en')
                                 {{$project->getTranslation('title', 'en')}}
                                 @elseif(app()->getLocale() == 'ar')
                                 {{$project->getTranslation('title', 'ar')}}
                                 @endif" />
                        </div>
                        <div class="work-intro">
                            <h3 class="work-title mb-50">
                                @if (app()->getLocale() == 'en')
                                    {{$project->getTranslation('title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$project->getTranslation('title', 'ar')}}
                                @endif
                            </h3>
                            <div class="work-descr">
                                 @if (app()->getLocale() == 'en')
                                    {!! $project->getTranslation('description', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $project->getTranslation('description', 'ar') !!}
                                @endif
                            </div>
                        </div>
                    </a>
                </li>
                @endif
                @endforeach
                <!-- End Work Item -->
            </ul>
            <!-- End Works Grid -->

        </div>
    </section>
    <!-- End Portfolio Section -->
    <!-- Divider -->
    <hr class="mt-0 mb-0 "/>
    <!-- End Divider -->
    <!-- Testimonials Section -->
    @foreach($testimonial_banners as $testimonial_banner)
    @if($testimonial_banner->is_publish == 1)
    <section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="{{$testimonial_banner->banner}}">
        <!-- Slide Item -->
        @foreach($testimonials as $testimonial)
        <div>
            <div class="container relative">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 align-center mb-120 mt-120">
                        <!-- Section Icon -->
                        <div class="section-icon">
                            <span class="icon-quote"></span>
                        </div>
                        <!-- Section Title -->
                        <h3 class="small-title font-alt">
                            @if (app()->getLocale() == 'en')
                                {{ $testimonial->getTranslation('title', 'en') }}
                            @elseif(app()->getLocale() == 'ar')
                                {{ $testimonial->getTranslation('title', 'ar') }}
                            @endif
                        </h3>
                        <blockquote class="testimonial white">
                            <p>
                                @if (app()->getLocale() == 'en')
                                    {!! $testimonial->getTranslation('description', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $testimonial->getTranslation('description', 'ar') !!}
                                @endif
                            </p>
                            <footer class="testimonial-author">
                                @if (app()->getLocale() == 'en')
                                    {{ $testimonial->getTranslation('footer', 'en') }}
                                @elseif(app()->getLocale() == 'ar')
                                    {{ $testimonial->getTranslation('footer', 'ar') }}
                                @endif
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End Slide Item -->
    </section>
    <!-- End Testimonials Section -->
    @else
    <section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="{{asset('assets/front/images/full-width-images/section-bg-3.jpg')}}">
        <!-- Slide Item -->
        <div>
            <div class="container relative">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 align-center mb-120 mt-120">
                        <!-- Section Icon -->
                        <div class="section-icon">
                            <span class="icon-quote"></span>
                        </div>
                        <!-- Section Title --><h3 class="small-title font-alt">Testimonial Unpublished</h3>
                        <blockquote class="testimonial white">
                            <p>
                                Please kindly contact with Admin
                            </p>
                            <footer class="testimonial-author">
                                GIG Admin Team.
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slide Item -->
    </section>
    <!-- End Testimonials Section -->
    @endif
    @endforeach

@stop
