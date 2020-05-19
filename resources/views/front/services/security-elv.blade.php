@extends('layouts.front')
@section('content')
    <!-- Head Section -->
    @foreach($security_banners as $security_banner)
    @if($security_banner->is_publish == 1)
    <section class="page-section bg-dark-alfa-30 parallax-3"
             data-background="{{$security_banner->banner}}">
        <div class="relative container align-center mt-120 mb-120">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                        @if (app()->getLocale() == 'en')
                            {{$security_banner->getTranslation('head_title', 'en')}}
                        @elseif(app()->getLocale() == 'ar')
                            {{$security_banner->getTranslation('head_title', 'ar')}}
                        @endif
                    </h1>
                    <div class="hs-line-4 font-alt">
                        @if (app()->getLocale() == 'en')
                            {{$security_banner->getTranslation('title', 'en')}}
                        @elseif(app()->getLocale() == 'ar')
                            {{$security_banner->getTranslation('title', 'ar')}}
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
    <!-- Services Section -->
    <section class="page-section" id="services">
        <div class="container relative">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tpl-alt-tabs font-alt pb-5 pb-sm-0 nav-tabs-justified" id="tabs1">
                @foreach($security_types as $security_service)
                @if($security_service->is_publish == 1)
                <li class="{{ $loop->first ? 'active' : '' }}">
                    <a href="#{{$security_service->id}}" data-toggle="tab">
                        <div class="alt-tabs-icon">
                            {!! $security_service->icon !!}
                        </div>
                        @if (app()->getLocale() == 'en')
                            {!! $security_service->getTranslation('title', 'en') !!}
                        @elseif(app()->getLocale() == 'ar')
                            {!! $security_service->getTranslation('title', 'ar') !!}
                        @endif
                    </a>
                </li>
                 @endif
                @endforeach
            </ul>
            <!-- End Nav tabs -->
            <div class="container relative">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mb-40 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">
                        <!-- Col -->
                        <div class="col-sm-4 mt-xs-40 mt-50" style="margin-left: -2%!important;">
                            <!-- Toggle -->
                            <dl class="toggle">
                                <dt>
                                    <a class="elv_request" href="#">Request Brochure</a>
                                </dt>
                                <dd>
                                    <!-- Form -->
                                    {!! Form::open(['method'=>'POST', 'action'=>['FrontController@brochureRequest', app()->getLocale()], 'class'=>'form', 'role'=>'form', 'files'=>true]) !!}
                                    <div class="mb-20 mb-md-10">
                                        <select class="input-md form-control brochure_id" required name="brochure_id">
                                            <option value="" class="selected">Choose Brochure</option>
                                            @foreach($brochure_request as $brochure)
                                                @if($brochure->filter->filter === 'Security & ELV' || $brochure->filter->filter === 'الأمن و ELV')
                                                    <option value="{{$brochure->id}}">{{$brochure->brochure_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-20 mb-md-10">
                                        <!-- Email -->
                                        <input type="text" name="requester_name" id="requester_name" class="input-md form-control" placeholder="Full Name" maxlength="100">
                                    </div>
                                    <div class="mb-20 mb-md-10">
                                        <!-- Email -->
                                        <input type="text" name="requester_phone" id="requester_phone" class="input-md form-control" placeholder="Phone Number" maxlength="100">
                                    </div>
                                    <div class="mb-20 mb-md-10">
                                        <!-- Email -->
                                        <input type="email" name="requester_email" id="requester_email" class="input-md form-control" placeholder="Email" maxlength="100">
                                    </div>
                                    <div class="mb-20 mb-md-10">
                                        <button type="submit" class="btn btn-mod btn-border btn-round btn-medium col-sm-offset-5">Submit</button>
                                    </div>
                                {{Form::close()}}
                                    <!-- End Form -->
                                </dd>
                            </dl>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Col -->
                    </div>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content tpl-tabs-cont">
                <!-- Service Item -->
                @foreach($security_types as $security_type)
                @if($security_type->is_publish == 1)
                <div class="tab-pane fade in {{ $loop->first ? 'active' : '' }}" id="{{$security_type->id}}">
                    <div class="section-text">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12 mb-sm-50 mb-xs-30">
                                <!-- Standard Tabs -->
                                <section class="page-section">
                                    <div class="container relative">
                                        <!-- Row -->
                                        <div class="row">
                                            <!-- Col -->
                                            <div class="col-sm-12">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs tpl-tabs animate" id="tabs2">
                                                   @foreach($security_categories as $security_category)
                                                   @if($security_category->is_publish == 1)
                                                   @if($security_type->id == $security_category->type_id)
                                                    <li class="{{ $loop->first ? 'active' : '' }}">
                                                        <a href="#secure{{$security_category->id}}" data-toggle="tab">
                                                            @if (app()->getLocale() == 'en')
                                                                {!! $security_category->getTranslation('title', 'en') !!}
                                                            @elseif(app()->getLocale() == 'ar')
                                                                {!! $security_category->getTranslation('title', 'ar') !!}
                                                            @endif
                                                        </a>
                                                    </li>
                                                    @endif
                                                    @endif
                                                    @endforeach
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content tpl-tabs-cont section-text">
                                                    @foreach($security_services as $security_service)
                                                        @if($security_service->is_publish == 1)
                                                            @if($security_type->id == $security_category->type_id || $security_service->type_id == $security_type->id)
                                                              <div class="tab-pane fade in @if($security_service->type_id == $security_type->id) {{ $loop->first ? 'active' : '' }} @endif"
                                                                   id="secure{{$security_service->category->id}}">
                                                                    <!--  Section tabs start -->
                                                                    <div class="col-md-12">
                                                                        <h3 class="text-left pt-30" style="font-size: 30px;">
                                                                            @if (app()->getLocale() == 'en')
                                                                                {!! $security_service->getTranslation('title', 'en') !!}
                                                                            @elseif(app()->getLocale() == 'ar')
                                                                                {!! $security_service->getTranslation('title', 'ar') !!}
                                                                            @endif
                                                                        </h3>
                                                                        <!-- Section -->
                                                                        <section class="page-section">
                                                                            <div class="container relative">
                                                                                <!-- Photo Grid -->
                                                                                <div class="row multi-columns-row mb-5 mb-xs-5">
                                                                                    <!-- Photo Item -->
                                                                                    <div class="col-md-12 col-lg-12 mb-md-5">
                                                                                        <div class="post-prev-img">
                                                                                            <a href="{{$security_service->media}}" class="lightbox-gallery-2 mfp-image">
                                                                                                <img src="{{$security_service->media}}" alt="{{$security_service->category->title}}" />
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- End Photo Item -->
                                                                                </div>
                                                                                <!-- End Photo Grid -->
                                                                            </div>
                                                                        </section>
                                                                        <!-- End Section -->
                                                                     </div>
                                                                     <!--  End Section tabs start -->
                                                                    <div class="col-md-12">
                                                                        @if (app()->getLocale() == 'en')
                                                                            {!! $security_service->getTranslation('description', 'en') !!}
                                                                        @elseif(app()->getLocale() == 'ar')
                                                                            {!! $security_service->getTranslation('description', 'ar') !!}
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                             @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- End Col -->
                                        </div>
                                        <!-- End Row -->
                                    </div>
                                </section>
                                <!-- End Standard Tabs -->
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- End Service Item -->
            </div>
            <!-- End Tab panes -->
        </div>
    </section>
    <!-- End Services Section -->
    <!-- Features Section -->
    <section class="page-section">
        <div class="container relative">
            @foreach($concept_titles as $concept_title)
                @if($concept_title->is_publish == 1)
                    @if($loop->last)
                        <h2 class="section-title font-alt mb-70 mb-sm-40">
                            @if (app()->getLocale() == 'en')
                                {{$concept_title->getTranslation('title', 'en')}}
                            @elseif(app()->getLocale() == 'ar')
                                {{$concept_title->getTranslation('title', 'ar')}}
                            @endif
                        </h2>
                     @endif
                @endif
            @endforeach
            <!-- Features Grid -->
            <div class="row multi-columns-row alt-features-grid">
                <!-- Features Item -->
            @foreach($security_concepts as $security_concept)
                @if($security_concept->is_publish == 1)
                    <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="{{$security_concept->icon}}"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">
                                    @if (app()->getLocale() == 'en')
                                        {{$security_concept->getTranslation('title', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$security_concept->getTranslation('title', 'ar')}}
                                    @endif
                                </h3>
                                <div class="alt-features-descr align-left">
                                    @if (app()->getLocale() == 'en')
                                        {!! $security_concept->getTranslation('description', 'en') !!}
                                    @elseif(app()->getLocale() == 'ar')
                                        {!! $security_concept->getTranslation('description', 'ar') !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                @endif
            @endforeach
                <!-- End Features Item -->
            </div>
            <!-- End Features Grid -->
        </div>
    </section>
    <!-- End Features Section -->
    <!-- Divider -->
    <hr class="mt-0 mb-0 "/>
    <!-- End Divider -->
@stop
