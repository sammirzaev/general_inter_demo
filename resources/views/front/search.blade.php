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
                               Search Pages
                            </h1>
                            <div class="hs-line-4 font-alt">
                               search specific pages
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
                                Search Pages
                            </h1>
                            <div class="hs-line-4 font-alt">
                                Search specific pages
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

            <div class="row mb-30 mb-xs-40">
                <div class="col-md-12">
                    <div class="section-text align-center">
                        <!-- Search -->
                        <form class="form-inline form mb-10" role="form">
                            <div class="search-wrap">
                                <button class="search-button animate" type="submit" title="Start Search">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="form-control search-field" name="search" value="{{isset($search) ? $search : ''}}" placeholder="Search...">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row section-text">
                @if($post_result > 0 || $post_results > 0 || $security_result > 0 || $water_result > 0 || $facility_result > 0)
                <div class="col-md-8 col-md-offset-2">
                    <hr class="mb-20"/>
                    @foreach($news_posts as $news_post)
                    <div class="col-md-12">
                        <h4 class="font-alt">{{$news_post->title}}</h4>
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{$news_post->media->media}}" alt="" width="500" height="350">
                            </div>
                            <div class="col-md-5">
                                <p>{!! Str::limit($news_post->description, 300, ' ...') !!}</p>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('news_single', [app()->getLocale(), $news_post->slug])}}" class="btn btn-mod btn-border btn-medium btn-round mt-30 right">Go To Page</a>
                            </div>
                        </div>
                        <hr class="mt-80"/>
                    </div>
                    @endforeach
                    @foreach($service_fires as $service_fire)
                    <div class="col-md-12">
                            <h4 class="font-alt">{{$service_fire->title}}</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{$service_fire->media}}" alt="" width="500" height="350">
                                </div>
                                <div class="col-md-5 left">
                                    <p>{!! Str::limit($service_fire->description, 300, ' ...') !!}</p>
                                </div>
                                <div class="col-md-2 right">
                                    <a href="{{route('fire_safety', [app()->getLocale(), $service_fire->id])}}" class="btn btn-mod btn-border btn-medium btn-round mt-30 right">Go To Page</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr class="mt-80"/>
                    @foreach($service_securities as $service_security)
                        <div class="col-md-12">
                            <h4 class="font-alt">{{$service_security->title}}</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{$service_security->media}}" alt="" width="500" height="350">
                                </div>
                                <div class="col-md-5 left">
                                    <p>{!! Str::limit($service_security->description, 300, ' ...') !!}</p>
                                </div>
                                <div class="col-md-2 right">
                                    <a href="{{route('security_elv', [app()->getLocale(), $service_security->id])}}" class="btn btn-mod btn-border btn-medium btn-round mt-30 right">Go To Page</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr class="mt-80"/>
                    @foreach($service_waters as $service_water)
                        <div class="col-md-12">
                            <h4 class="font-alt">{{$service_water->title}}</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{$service_water->media}}" alt="" width="500" height="350">
                                </div>
                                <div class="col-md-5 left">
                                    <p>{!! mb_strimwidth($service_water->description, 0, 300, ' ...') !!}</p>
                                </div>
                                <div class="col-md-2 right">
                                    <a href="{{route('water_treat', [app()->getLocale(), $service_water->id])}}" class="btn btn-mod btn-border btn-medium btn-round mt-30 right">Go To Page</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr class="mt-80"/>
                    @foreach($service_facilities as $service_facility)
                        <div class="col-md-12">
                            <h4 class="font-alt">{{$service_facility->title}}</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{$service_facility->media}}" alt="" width="500" height="350">
                                </div>
                                <div class="col-md-5 left">
                                    <p>{!! Str::limit($service_facility->description, 300, ' ...') !!}</p>
                                </div>
                                <div class="col-md-2 right">
                                    <a href="{{route('facility_manage', [app()->getLocale(), $service_facility->id])}}" class="btn btn-mod btn-border btn-medium btn-round mt-30 right">Go To Page</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr class="mt-80"/>
                </div>
                 @else
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-10 text-center">
                                <h4 class="font-alt text-center">Search Item Not Found</h4>
                                <p class="text-center">Please Search Our Services, News and Events</p>
                                <a href="{{route('home', app()->getLocale())}}" class="btn btn-mod btn-border btn-medium btn-round mt-30">Go Home</a>
                            </div>
                        </div>
                    </div>
                 @endif
            </div>
        </div>
    </section>
    <!-- End Section -->
@stop

