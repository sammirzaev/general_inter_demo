@extends('layouts.front')
@section('content')
    <main class="page-header">
        <div class="container">
            <h1 class="text-center">Careers</h1>
        </div>
    </main>
    <!-- start banner Area -->
    <section class="banner-area relative page-header" id="home">
        <div class="container">
            <div class="row">
                <div class="banner-content col-lg-12">
                    <h1 class="text-white">
                        Careers
                    </h1>
                    @include('layouts.flash-message')
                    <form action="#" class="serach-form-area">
                        <div class="row justify-content-center form-wrap">
                            <div class="col-lg-8 col-md-8 form-cols">
                                <input type="text" class="form-control" name="search" value="{{isset($search) ? $search : ''}}" placeholder="what are you looging for?">
                            </div>
                            <div class="col-lg-2 form-cols">
                                <button type="submit" class="btn btn-success">
                                    <span class="lnr lnr-magnifier"></span> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start post Area -->
    <section class="post-area section-gap content">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-12 post-list">
                    @if(!empty($careers_contact))
                        @foreach($careers_contact as $career)
                            <div class="single-post d-flex flex-row col-md-6 col-xs-12 col-sm-12 m-5">
                                <div class="thumb">
                                    <img src="{{$career->brand ? asset('public/brands/'.$career->brand->brand->name) : asset('public/assets/admin/assets/images/no-logo.jpg')}}" alt="{{$career->brand->brand->name}}"  class="img-thumbnail" width="200">
                                    <ul class="tags">
                                        <li>
                                            {{$career->categories->pluck('name')->implode(' | ')}}
                                        </li>

                                    </ul>
                                </div>
                                <div class="details">
                                    <div class="title d-flex flex-row justify-content-between">
                                        <div class="titles">
                                            <a href="#"><h4>{{$career->job_name}}</h4></a>
                                            <h6>{{$career->job_title}}</h6>
                                        </div>
                                        <ul class="btns">
                                            <li>
                                            <a  data-toggle="modal" data-target="#applyModal" href="{{route('careers-contact', [app()->getLocale(), $career->id])}}">Apply</a>
                                            </li>
                                            @include('front.careers.careers-modal')
                                        </ul>
                                    </div>
                                    <p>
                                        {!! $career->job_desc !!}
                                    </p>
                                    <h5>Job Nature: {{$career->type->name}}</h5>
                                    <p class="address"><span class="lnr lnr-map"></span> {{$career->location->name}}</p>
                                    <p class="address"><span class="lnr lnr-database"></span> {{$career->salary->name}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-12 col-lg-12 col-md-offset-6 col-lg-offset-6">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-circle justify-content-center pg-teal">
                                {{$careers_contact->render()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post Area -->

@stop
@section('styles')
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
    <style>
        .section-gap {
            padding: 5px 0!important;
        }
        element.style {
            height: 1px!important;
        }
        .pagination {
         display: block;
            margin-right: 200px!important;
        }


</style>
@stop
