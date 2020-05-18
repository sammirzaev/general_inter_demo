@extends('layouts.front')
@section('content')
    <!-- Home Section -->
    @foreach($home_banners as $home_banner)
    @if($home_banner->is_publish == 1)
    <section class="home-section bg-dark-alfa-30 parallax-2" data-background="{{$home_banner->banner}}" id="home">
        <div class="js-height-full">
            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">
                    <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                    @if (app()->getLocale() == 'en')
                        {{$home_banner->getTranslation('title', 'en')}}
                    @elseif(app()->getLocale() == 'ar')
                        {{$home_banner->getTranslation('title', 'ar')}}
                    @endif
                    </h1>
                    <h2 class="hs-line-7 mb-50 mb-xs-30">
                        @if (app()->getLocale() == 'en')
                            <span class="text-rotate">
                               {{$home_banner->getTranslation('head_title', 'en')}}
                             </span>
                        @elseif(app()->getLocale() == 'ar')
                            <span class="text-rotate">
                               {{$home_banner->getTranslation('head_title', 'ar')}}
                            </span>
                        @endif
                    </h2>
                    <div class="local-scroll">
                        @if (app()->getLocale() == 'en')
                            <a href="{{route($home_banner->quote_link, app()->getLocale())}}" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs get-quote-btn">{{$home_banner->getTranslation('quote', 'en')}}</a>
                        @elseif(app()->getLocale() == 'ar')
                            <a href="{{route($home_banner->quote_link, app()->getLocale())}}" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs get-quote-btn">{{$home_banner->getTranslation('quote', 'ar')}}</a>
                        @endif
                    </div>
                </div>
            </div>
            <!-- End Hero Content -->
            <!-- Scroll Down -->
            <div class="local-scroll">
                <a href="#services" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>
            <!-- End Scroll Down -->
        </div>
    </section>
    @else
        <section class="home-section bg-dark-alfa-30 parallax-2" data-background="{{asset('assets/front/images/full-width-images/section-bg-2.jpg')}}" id="home">
            <div class="js-height-full">
                <!-- Hero Content -->
                <div class="home-content">
                    <div class="home-text">
                        <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                            Home - Banner Has Been Unpublished
                        </h1>
                        <h2 class="hs-line-7 mb-50 mb-xs-30">
                            <span class="text-rotate">
                              Please,Contact,Admin
                            </span>
                        </h2>
                        <div class="local-scroll">

                        </div>
                    </div>
                </div>
                <!-- End Hero Content -->
                <!-- Scroll Down -->
                <div class="local-scroll">
                    <a href="#services" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
                </div>
                <!-- End Scroll Down -->
            </div>
        </section>
    @endif
    @endforeach
    <!-- End Home Section -->
    <!-- Divider -->
    <hr class="mt-0 mb-0 "/>
    <!-- End Divider -->
    <!-- Services Section -->
    <section class="page-section" id="services">
        <div class="container relative">
            <h2 class="section-title font-alt mb-70 mb-sm-40">
                @foreach($home_services as $home_service)
                    @if($loop->first)
                        @if (app()->getLocale() == 'en')
                            {!! $home_service->getTranslation('title', 'en') !!}
                        @elseif(app()->getLocale() == 'ar')
                            {!! $home_service->getTranslation('title', 'ar') !!}
                        @endif
                    @endif
                @endforeach
            </h2>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tpl-alt-tabs font-alt pt-30 pt-sm-0 pb-30 pb-sm-0 nav-tabs-justified tab-section-font">
                @foreach($services as $service)
                @if($service->is_publish == 1)
                <li class="{{ $loop->first ? 'active' : '' }}">
                    <a href="#{{$service->id}}" data-toggle="tab" class="active">
                        <div class="alt-tabs-icon">
                            {!! $service->icon !!}
                        </div>
                        @if (app()->getLocale() == 'en')
                            {!! $service->getTranslation('name', 'en') !!}
                        @elseif(app()->getLocale() == 'ar')
                            {!! $service->getTranslation('name', 'ar') !!}
                        @endif
                    </a>
                </li>
                 @endif
                @endforeach
            </ul>
            <!-- End Nav tabs -->
            <!-- Tab panes -->
            <div class="tab-content tpl-tabs-cont">
                <!-- Service Item -->
                @foreach($home_services as $home_service)
                @if($home_service->is_publish == 1)
                <div class="tab-pane fade in {{ $loop->first ? 'active' : '' }}" id="{{$home_service->service->id}}">
                    <div class="section-text">
                        <div class="row">
                            <div class="col-md-8 mb-md-40 mb-xs-30 col-md-offset-2 text-justify">
                                @if (app()->getLocale() == 'en')
                                    {!! $home_service->getTranslation('description', 'en') !!}
                                @elseif(app()->getLocale() == 'ar')
                                    {!! $home_service->getTranslation('description', 'ar') !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Tab panes -->
                    <div class="align-center mt-50">
                        <a href="{{route($home_service->read_link, app()->getLocale())}}" class="section-more font-alt">
                            @if (app()->getLocale() == 'en')
                                {!! $home_service->getTranslation('read_more', 'en') !!}
                            @elseif(app()->getLocale() == 'ar')
                                {!! $home_service->getTranslation('read_more', 'ar') !!}
                            @endif
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- End Service Item -->
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <!-- Divider -->
    <hr class="mt-0 mb-0"/>
    <!-- End Divider -->
    <!-- Section Partners -->

    <section class="page-section bg-dark-alfa-70 bg-scroll"
             data-background="
             @foreach($home_partners as $home_partner)
             @if($loop->first)
                {{$home_partner->background}}
             @endif
             @endforeach
                 ">
        <div class="container relative">
            <h2 class="section-title font-alt mb-70 mb-sm-40" style="color: rgba(0,0,0,.8);">
                @foreach($home_partners as $home_partner)
                    @if($loop->first)
                        @if (app()->getLocale() == 'en')
                            {!! $home_partner->getTranslation('title', 'en') !!}
                        @elseif(app()->getLocale() == 'ar')
                            {!! $home_partner->getTranslation('title', 'ar') !!}
                        @endif
                    @endif
                @endforeach
            </h2>
            <!-- Features Grid -->
            <div class="item-carousel owl-carousel">
            @foreach($home_partners as $home_partner)
                @if($home_partner->is_publish == 1)
                <!-- Features Item -->
                <div class="features-item">
                    <div class="features-icon">
                        <img src="{{$home_partner->logo}}" alt="Our Partners | General International Group" width="250">
                    </div>
                </div>
                <!-- End Features Item -->
                @endif
            @endforeach
            </div>
            <!-- Features Grid -->

        </div>
    </section>

    <!-- End Section Partners-->
    <!-- Divider -->
    <hr class="mt-0 mb-0 "/>
    <!-- End Divider -->
@stop
