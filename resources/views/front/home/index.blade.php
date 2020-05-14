@extends('layouts.front')
@section('content')
@include('front.slider.slder')
    <div class="content">
        <!-- Section About -->
        <section class="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="section-subtitle">about us</h1>
                        <h2 class="section-title section-about-title">Solving Engineering Challenges
                            Delivering quality products and services</h2>
                        <p>General International Group holds more than 30 years of expertise
                            and exposure with strong presence in the UAE delivering engineering solutions in
                            specialized services to 200 + customers across verticals. Our team can work closely with you to support from the Design stage of a project.
                            We have the capability to Supply, Design, Install, Commission and Hand over the project to our customers on time and on budget.
                            Furthermore, our strength in the Facilities Management Services confirms our ability to properly and effectively maintain your facility.</p>
                        <a href="{{route('about', app()->getLocale())}}" class="btn btn-outline-success">Read More</a>
                        <div class="experience-box">
                            <div class="experience-border"></div>
                            <div class="experience-content">
                                <div class="experience-number">30</div>
                                <div class="experience-info wow fadeInDown">Years<br>Experience<br>Working</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="dots-image">
                            <img alt="" class="about-img img-responsive" src="{{asset('public/assets/front/images/about_pic.jpg')}}">
                            <div class="dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Projects -->
        <section class="section-projects section boxed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="section-title">Our Services</h2>
                    </div>

                </div>
            </div>
            <div class="project-carousel owl-carousel">
                <div class="project-item item-shadow building project-fire">
                    <img alt="" class="img-responsive" src="{{asset('public/assets/front/images/fire-safety-icon.png')}}">
                    <div class="project-hover fire-hover">
                        <div class="project-hover-content">
                            <h3 class="project-title">Fire & Life Safety</h3>
                            <p class="project-description">We provide a comprehensive set of turnkey solutions for Active
                                as well as Passive Fire Protection. Our team is certified and able to
                                handle projects of various classifications.</p>
                        </div>
                    </div>
                    <a href="{{route('service', app()->getLocale())}}" class="link-arrow link-fire">See Services <i class="icon ion-ios-arrow-right"></i></a>
                </div>
                <div class="project-item item-shadow building project-camera">
                    <img alt="" class="img-responsive" src="{{asset('public/assets/front/images/security-elv-icon.jpg')}}">
                    <div class="project-hover camera-cctv-hover">
                        <div class="project-hover-content">
                            <h3 class="project-title">Security & ELV</h3>
                            <p class="project-description">We deliver a range of ELV solutions from
                                CCTV & Intrusion Detection to PA systems.
                                Our solutions can be offered independently or bundled
                                to offer an integrated and advanced solution which is IOT ready.</p>
                        </div>
                    </div>
                    <a href="{{route('service', app()->getLocale())}}" class="link-arrow link-camera">See Services <i class="icon ion-ios-arrow-right"></i></a>
                </div>
                <div class="project-item item-shadow building project-water">
                    <img alt="" class="img-responsive" src="{{asset('public/assets/front/images/water_GIG-01.png')}}">
                    <div class="project-hover water-hover">
                        <div class="project-hover-content">
                            <h3 class="project-title">Water Treatment</h3>
                            <p class="project-description">We offer solutions from supply of specialty chemicals
                                to the supply of Water Treatment equipment including supply of  Waste Water Treatment Plants.
                                Our solutions can be applied for clientele in all sectors.
                                We analyze the needs of the customer to offer a solution that is right for your needs.</p>
                        </div>
                    </div>
                    <a href="{{route('service', app()->getLocale())}}" class="link-arrow link-water">See Services <i class="icon ion-ios-arrow-right"></i></a>
                </div>
                <div class="project-item item-shadow building">
                    <img alt="" class="img-responsive" src="{{asset('public/assets/front/images/facilities.png')}}">
                    <div class="project-hover">
                        <div class="project-hover-content">
                            <h3 class="project-title">Facilities Management</h3>
                            <p class="project-description">We apply the latest tools to identify the efficiency and the expected life span of the equipment at your facility.
                                Our objectives when we take on  Projects is not only to maintain the equipment but to offer recommendations
                                to assist in providing our customers with savings in the short,
                                medium & long term by assessing the overall energy expenditure and applying sustainability procedures.</p>
                        </div>
                    </div>
                    <a href="{{route('service', app()->getLocale())}}" class="link-arrow link-fire">See Services <i class="icon ion-ios-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- Section Clients -->
        <section class="section-clients section bg-dots">
            <div class="container">
                <h2 class="section-title">Our Partners</h2>
                <div class="partner-carousel owl-carousel">
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/1.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/2.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/3.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/4.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/5.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/6.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/7.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/8.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/9.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/10-1.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/11.jpg')}}">
                    </div>
                    <div class="partner-carousel-item">
                        <img alt="" src="{{asset('public/assets/front/images/partners/12.jpg')}}">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section News -->

        <section class="section-news section">
            <div class="container">
                <h2 class="section-title">Latest Projects<a href="{{route('project', app()->getLocale())}}" class="link-arrow-2 pull-right">All Projects <i class="icon ion-ios-arrow-right"></i></a></h2>
                <div class="news-carousel owl-carousel">
                    <div class="news-item">
                        <img alt="" src="{{asset('public/assets/front/images/bg/project1.jpg')}}" style="width: 370px; height: 370px;">
                        <div class="news-hover">
                            <div class="hover-border"><div></div></div>
                            <div class="content">
                                <h3 class="news-title">DIFC ICD - BROOKFIELD PLACE, DUBAI</h3>
                                <p class="news-description">- Plot No. : GB03/04, Dubai<br>
                                    - Project Consultant : PRIEDEMANN<br>
                                    - Solution / System : Passive Fire Protection</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <img alt="" src="{{asset('public/assets/front/images/bg/project2.jpg')}}" style="width: 370px; height: 370px;">
                        <div class="news-hover">
                            <div class="hover-border"><div></div></div>
                            <div class="content">
                                <h3 class="news-title">Shams Development Reem Tower One</h3>
                                <p class="news-description">- Plot No. : Reem Island, Sector RS1 Plot S1-C03 – Abu Dhabi, U.A.E<br>
                                    - Design Consultant : M/s MAISAM ARCHITECTS ENGINEERS<br>
                                    - Solution / System: Passive Fire Protection</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <img alt="" src="{{asset('public/assets/front/images/bg/project3.jpg')}}" style="width: 370px; height: 370px;">
                        <div class="news-hover">
                            <div class="hover-border"><div></div></div>
                            <div class="content">
                                <h3 class="news-title">Tiara United Towers</h3>
                                <p class="news-description">- Plot No. : 3460888/3460887 – Business Bay Dubai<br>
                                    - Consultant : M/s. ADP Ingineerie<br>
                                    - Solution / System: Passive Fire Protection</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
