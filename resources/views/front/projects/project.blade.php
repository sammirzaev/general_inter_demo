@extends('layouts.front')
@section('content')
    <main class="page-header">
        <div class="container">
            <h1 class="text-center">Our Projects</h1>
        </div>
    </main>
    <div class="content">
        <div class="projects">
            <div class="container">
                <div class="filter-content-3">
                    <ul class="filter js-filter">
                        <li class="active"><a href="#" data-filter="*">All Projects</a></li>
                        <li><a href="#" data-filter=".passive">Passive Fire Protection</a></li>
                    </ul>
                </div>
                <div class="grid-items js-isotope js-grid-items">
                    <div class="grid-item passive js-isotope-item js-grid-item">
                        <div class="news-item">
                            <img alt="" src="{{asset('public/assets/front/images/difc.jpg')}}" style="width: 350px; height: 370px;">
                            <div class="news-hover">
                                <div class="hover-border"><div></div></div>
                                <div class="content">
                                    <h3 class="news-title">DIFC ICD- BROOKFIELD PLACE, DUBAI</h3>
                                    <p class="news-description">
                                        - Plot No. : GB03/04, Dubai<br>

                                        - Project Consultant : PRIEDEMANN<br>

                                        - Solution / System : Passive Fire Protection<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item passive js-isotope-item js-grid-item">
                        <div class="news-item">
                            <img alt="" src="{{asset('public/assets/front/images/shams.jpg')}}" style="width: 350px; height: 370px;">
                            <div class="news-hover">
                                <div class="hover-border"><div></div></div>
                                <div class="content">
                                    <h3 class="news-title">Shams Development Reem Tower One</h3>
                                    <p class="news-description">
                                        - Plot No. : Reem Island, Sector RS1 Plot S1-C03 – Abu Dhabi, U.A.E<br>

                                        - Design Consultant : M/s MAISAM ARCHITECTS ENGINEERS<br>

                                        - Solution / System: Passive Fire Protection
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item passive js-isotope-item js-grid-item">
                        <div class="news-item">
                            <img alt="" src="{{asset('public/assets/front/images/tiara.jpg')}}" style="width: 350px; height: 370px;">
                            <div class="news-hover">
                                <div class="hover-border"><div></div></div>
                                <div class="content">
                                    <h3 class="news-title">Tiara United Towers</h3>
                                    <p class="news-description">
                                        Plot No. : 3460888/3460887 – Business Bay Dubai<br>

                                        Consultant : M/s. ADP Ingineerie<br>

                                        Solution / System: Passive Fire Protection<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
