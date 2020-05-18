@extends('layouts.front')
@section('content')
    <main class="page-header">
        <div class="container">
            <h1 class="text-center">Brochures</h1>
            @include('layouts.flash-message')
            <p class="text-center text-muted">In Order to download please kindly request by clicking brochure</p>
            <div class="col-md-12 justify-content-center">
                <button data-toggle="modal" data-target="#brochureModal" class="genric-btn success circle col-md-2 col-md-offset-5 col-sm-offset-5 col-xs-offset-4">REQUEST BROCHURE</button>
            </div>
            @include('front.brochures.brochure-modal')
        </div>
    </main>
    <div class="content">
        <div class="projects">
            <div class="container">
                <div class="filter-content-3">

                    <ul class="filter js-filter">
                        <li class="active"><a href="#" data-filter="*">All Brochures</a></li>
                        @foreach($filter_brochures as $filter_brochure)
                            @if (app()->getLocale() == 'en')
                            <li><a href="#" data-filter=".{{$filter_brochure->id}}">{{$filter_brochure->getTranslation('filter', 'en')}}</a></li>
                            @elseif(app()->getLocale() == 'ar')
                             <li><a href="#" data-filter=".{{$filter_brochure->id}}">{{$filter_brochure->getTranslation('filter', 'ar')}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="grid-items js-isotope js-grid-items">
                    @foreach($brochures as $brochure)
                    <div class="grid-item {{$brochure->filter_id}} js-isotope-item js-grid-item">
                        <div class="news-item">
                            <img alt="" src="{{$brochure->picture ? asset('brochures-pics/'.$brochure->picture) : asset('assets/admin/assets/images/no-avatar.png')}}" style="width: 350px; height: 370px;">
                            <div class="news-hover">
                                <div class="hover-border"><div></div></div>
                                <div class="content">
                                    @if (app()->getLocale() == 'en')
                                    <h3 class="news-title">{!! $brochure->getTranslation('brochure_name', 'en') !!}</h3>
                                     @elseif(app()->getLocale() == 'ar')
                                      <h3 class="news-title">{!! $brochure->getTranslation('brochure_name', 'ar') !!}</h3>
                                     @endif
                                     @if (app()->getLocale() == 'en')
                                    <p class="news-description">
                                        {!! $brochure->getTranslation('description', 'en') !!}
                                    </p>
                                    @elseif(app()->getLocale() == 'ar')
                                     <p class="news-description">
                                         {!! $brochure->getTranslation('description', 'ar') !!}
                                     </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
