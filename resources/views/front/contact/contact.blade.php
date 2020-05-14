 @extends('layouts.front')
@section('content')
    <!-- Pageheader -->
    <main class="page-header-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="title-hr"></div>
                </div>
                <div class="col-md-8 col-lg-6"><h1>Contact With Us</h1></div>
                @include('layouts.flash-message')
            </div>
        </div>
    </main>

    <div class="content">
        <div class="page-inner">
            <section class="section-message section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr"></div>
                                <div class="info-title">You need help!</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            {!! Form::open(['method'=>'POST', 'action'=>['FrontController@contactEmail', app()->getLocale()], 'class'=>'', 'files'=>true]) !!}
                                <div class="row">
                                    <div class="form-group col-sm-6 col-lg-4">
                                        <input class="input-gray" type="text" name="name" required placeholder="Full Name*">
                                    </div>
                                    <div class="form-group col-sm-6 col-lg-4">
                                        <input class="input-gray" type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-4">
                                        <input class="input-gray" type="text" name="subject" placeholder="Subject (Optinal)">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <textarea class="input-gray" name="message"  required  placeholder="Message*"></textarea>
                                    </div>
                                    <div class="col-sm-12"><button type="submit" class="btn-upper btn-yellow btn">Send Message</button></div>
                                </div>
                                <div class="error-message">
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
                           {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr"></div>
                                <div class="info-title">Keep in touch</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row-contact row">
                                <div class="col-contact col-lg-6">
                                    <h3 class="contact-title contact-top">GIG Abu Dhabi Office</h3>
                                    <p class="contact-address text-muted"><strong> P.O.BOX : 46750, Abu Dhabi, U.A.E</strong></p>
                                    <p class="contact-row"><strong class="text-dark">Email:</strong> info@generalintlgroup.com</p>
                                    <p class="contact-row"><strong class="text-dark">Phone:</strong>  + 971 2 666 3316</p>
                                    <p class="contact-row"><strong class="text-dark">Fax:</strong>  + 971 2 666 4119</p>
                                </div>
                                <div class="col-contact col-lg-6">
                                    <p class="contact-top"><strong class="text-muted">Call directly:</strong></p>
                                    <p class="phone-lg text-dark">+ 971 2 666 3316</p>
                                    <p class="text-muted"><strong class="text-dark">Work Hours</strong><br>
                                        8:00 am to 5:30 pm<br>
                                        Sun – Thurs
                                </div>
                            </div>
                            <div class="row-contact row">
                                <div class="col-contact col-lg-6">
                                    <h3 class="contact-title contact-top">GIG Dubai Office</h3>
                                    <p class="contact-address text-muted"><strong> P.O. BOX : 38259 Dubai, U.A.E</strong></p>
                                    <p class="contact-row"><strong class="text-dark">Phone:</strong>  +971 4 338 3599</p>
                                    <p class="contact-row"><strong class="text-dark">Fax:</strong>  +971 4 338 3799</p>
                                </div>
                                <div class="col-contact col-lg-6">
                                    <p class="contact-top"><strong class="text-muted">Call directly:</strong></p>
                                    <p class="phone-lg text-dark"> +971 4 338 3599</p>
                                    <p class="text-muted"><strong class="text-dark">Work Hours</strong><br>
                                        8:00 am to 5:30 pm<br>
                                        Sun – Thurs
                                </div>
                            </div>
                            <div class="row-contact row">
                                <div class="col-contact col-lg-6">
                                    <h3 class="contact-title contact-top">GIG Al Ain Office</h3>
                                    <p class="contact-address text-muted"><strong> P.O. BOX : 46750, Al Ain, U.A.E</strong></p>
                                </div>
                                <div class="col-contact col-lg-6">
                                    <p class="text-muted"><strong class="text-dark">Work Hours</strong><br>
                                        8:00 am to 5:30 pm<br>
                                        Sun – Thurs
                                </div>
                            </div>
                            <div class="row-contact row">
                                <div class="col-contact col-lg-6">
                                    <h3 class="contact-title contact-top">GIG Sharjah Office</h3>
                                    <p class="contact-address text-muted"><strong>   P.O. BOX : 22171 , Sharjah, U.A.E</strong></p>
                                </div>
                                <div class="col-contact col-lg-6">
                                    <p class="text-muted"><strong class="text-dark">Work Hours</strong><br>
                                        8:00 am to 5:30 pm<br>
                                        Sun – Thurs
                                </div>
                            </div>
                            <div class="row-contact row">
                                <div class="col-contact col-lg-6">
                                    <h3 class="contact-title contact-top">GIG Umm Al Quwain Office</h3>
                                    <p class="contact-address text-muted"><strong>  P.O. BOX : 3857, Umm Al Quwain, U.A.E</strong></p>
                                </div>
                                <div class="col-contact col-lg-6">
                                    <p class="text-muted"><strong class="text-dark">Work Hours</strong><br>
                                        8:00 am to 5:30 pm<br>
                                        Sun – Thurs
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@stop
