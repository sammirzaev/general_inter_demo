@extends('layouts.front')
@section('content')
    <!-- Head Section -->
    @foreach($career_banners as $career_banner)
        @if($career_banner->is_publish == 1)
            <section class="page-section bg-dark-alfa-30 parallax-3"
                     data-background="{{$career_banner->banner}}">
                <div class="relative container align-center mt-120 mb-120">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                @if (app()->getLocale() == 'en')
                                    {{$career_banner->getTranslation('head_title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$career_banner->getTranslation('head_title', 'ar')}}
                                @endif
                            </h1>
                            <div class="hs-line-4 font-alt">
                                @if (app()->getLocale() == 'en')
                                    {{$career_banner->getTranslation('title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$career_banner->getTranslation('title', 'ar')}}
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
    <!-- Search Section -->
    <section class="small-section">
        <div class="container relative">
            <!-- Search -->
            @include('layouts.flash-message')
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
    <hr class="mt-0 mb-50"/>
    <!-- End Divider -->
    <!-- Pricing row -->
    <div class="row multi-columns-row">
        <div class="col-md-8 col-lg-8 col-sm-6 col-md-offset-2 col-lg-offset-2">
        @if(!empty($careers_contact))
            @foreach($careers_contact as $career)
            @if($career->is_publish == 1)
            <!-- Pricing Item -->
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="pricing-item">
                    <div class="pricing-item-inner">
                        <div class="pricing-wrap">
                            <div class="pricing-title align-center mt-30">
                                @if (app()->getLocale() == 'en')
                                {{$career->getTranslation('job_name', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                 {{$career->getTranslation('job_name', 'ar')}}
                                @endif
                            </div>
                            <!-- Pricing Title -->
                            @if (app()->getLocale() == 'en')
                            <div class="pricing-title align-left mt-30 category-title">
                                {{$career->categories->pluck('name')->implode(' | ')}}
                            </div>
                            @elseif(app()->getLocale() == 'ar')
                            <div class="pricing-title align-right mt-30 category-title">
                               {{$career->categories->pluck('name')->implode(' | ')}}
                            </div>
                            @endif
                            <!-- Pricing Title -->
                            @if (app()->getLocale() == 'en')
                                <div class="pricing-title align-left mt-30">
                                    <p class="align-left" style="font-size: 10px; margin-top: 20px; color: #777777;">{{$career->getTranslation('job_title', 'en')}}</p>
                                </div>
                            @elseif(app()->getLocale() == 'ar')
                                <div class="pricing-title align-right mt-30">
                                    <p class="align-right" style="font-size: 10px; margin-top: 20px; color: #777777;">{{$career->getTranslation('job_title', 'ar')}}</p>
                                </div>
                            @endif
                            <!-- Pricing Features -->
                            <div class="pricing-features font-alt">
                                @if (app()->getLocale() == 'en')
                                    <ul class="sf-list pr-list align-left">
                                        <li>Location: {{$career->location->getTranslation('name', 'en')}}</li>
                                        <li>Job Type: {{$career->type->getTranslation('name', 'en')}}</li>
                                        <li>Salary: {{$career->salary->getTranslation('name', 'en')}}</li>
                                        <li>Job Description:</li>
                                        <li>
                                            {!! $career->getTranslation('job_desc', 'en') !!}
                                        </li>
                                    </ul>
                                @elseif(app()->getLocale() == 'ar')
                                    <ul class="sf-list pr-list align-right">
                                        <li>{{$career->location->getTranslation('name', 'ar')}} الموقع: </li>
                                        <li>{{$career->type->getTranslation('name', 'ar')}} نوع الوظيفة / المهنة: </li>
                                        <li>{{$career->salary->getTranslation('name', 'ar')}} الراتب: </li>
                                        <li>المسمى الوظيفي: </li>
                                        <li>
                                            {!! $career->getTranslation('job_desc', 'ar') !!}
                                        </li>
                                    </ul>
                                @endif

                            </div>
                            <div class="pricing-num">
                                <a href="#" class="btn btn-mod apply-btn" data-toggle="modal" data-target="#careersModal">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Pricing Item -->
            @endif
            @endforeach
        @endif
        </div>
    </div>
    <!-- End Pricing row -->
    <div class="col-md-8 col-lg-8 col-sm-8 col-md-offset-5 col-lg-offset-5 col-sm-offset-5">
        <!-- Pagination -->
        <div class="pagination pg-dark pagination-lg">
            {{$careers_contact->render()}}
        </div>
        <!-- End Pagination -->
    </div>

    <!-- Divider -->
    <hr class="mt-0 mb-0"/>
    <!-- End Divider -->
@include('front.careers.careers-modal')
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
@section('scripts')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop
