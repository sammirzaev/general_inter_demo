@extends('layouts.front')
@section('content')
    <main class="page-header">
        <div class="container">
            <h1 class="text-center">Request Brochures</h1>
        </div>
    </main>
    <section class="section-message section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-info">
                        <div class="title-hr"></div>
                        <div class="info-title">Brochure Request</div>
                    </div>
                </div>
                <div class="col-md-9">
                    {!! Form::open(['method'=>'POST', 'action'=>['FrontController@brochureRequest', 'class'=>'', 'files'=>true]) !!}
                        <div class="row">
                            <div class="form-group col-sm-12 col-lg-12">
{{--                                <input class="input-gray brochure_name" type="text" name="brochure_name" value="{{$brochure->brochure_name}}" readonly>--}}
                                <input class="input-gray brochure_name" type="text" name="brochure_name" value="Brochure Name" readonly>
                            </div>
                            <div class="form-group col-sm-12 col-lg-12">
                                <input class="input-gray" type="text" name="name" required placeholder="Full Name*">
                            </div>
                            <div class="form-group col-sm-12 col-lg-12">
                                <input class="input-gray" type="email" name="email" required placeholder="Email*">
                            </div>
                            <div class="form-group col-sm-12 col-lg-12">
                                <input class="input-gray" type="text" name="phone" required placeholder="Your Phone Number*">
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn-upper btn-yellow btn">Subscribe</button>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </section>
@stop

