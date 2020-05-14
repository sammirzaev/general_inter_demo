@extends('layouts.front')
@section('content')
    <main class="page-header">
        <div class="container">
            <h1 class="text-center">APPLY TO THIS JOB</h1>
        </div>
    </main>
    <section class="section-message section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-info">
                        <div class="title-hr"></div>
                        <div class="info-title">Join Us</div>
                    </div>
                </div>
                <div class="col-md-9">
                    {!! Form::open(['method'=>'POST', 'action'=>'FrontController@store', 'class'=>'', 'files'=>true]) !!}
                        <div class="row">
                            <div class="form-group col-sm-12 col-lg-12">
                                <input class="input-gray position" type="text" name="position" value="{{$careers['job_name']}}" readonly>
                            </div>
                            <div class="form-group col-sm-6 col-lg-4">
                                <input class="input-gray" type="text" name="name" required placeholder="Full Name*">
                            </div>
                            <div class="form-group col-sm-6 col-lg-4">
                                <input class="input-gray" type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="form-group col-sm-6 col-lg-4">
                                <input class="input-gray" type="text" name="phone" placeholder="Your Phone Number*">
                            </div>
                            <div class="form-group col-sm-12 col-lg-12">
                                <input class="input-gray" type="text" name="subject" placeholder="Subject (Optinal)">
                            </div>
                            <div class="form-group col-sm-12">
                                <textarea class="input-gray" name="letter"  placeholder="Cover Letter (Optional)*"></textarea>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="cv">Upload CV*</label>
                                <input type="file" class="input-gray" id="cv" name="file" required  placeholder="Upload Your CV*">
                                <p class="text-muted">upload only pdf, doc, docx formats please</p>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn-upper btn-yellow btn">Submit</button>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </section>
@stop

