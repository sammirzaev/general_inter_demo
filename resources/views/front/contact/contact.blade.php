 @extends('layouts.front')
@section('content')
    <!-- Head Section -->
    @foreach($contact_banners as $contact_banner)
        @if($contact_banner->is_publish == 1)
            <section class="page-section bg-dark-alfa-30 parallax-3"
                     data-background="{{$contact_banner->banner}}">
                <div class="relative container align-center mt-120 mb-120">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                @if (app()->getLocale() == 'en')
                                    {{$contact_banner->getTranslation('head_title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$contact_banner->getTranslation('head_title', 'ar')}}
                                @endif
                            </h1>
                            <div class="hs-line-4 font-alt">
                                @if (app()->getLocale() == 'en')
                                    {{$contact_banner->getTranslation('title', 'en')}}
                                @elseif(app()->getLocale() == 'ar')
                                    {{$contact_banner->getTranslation('title', 'ar')}}
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
    <!-- Contact Details Section -->
    <section class="page-section" id="contact">
        <div class="container relative">

            <h2 class="section-title font-alt mb-70 mb-sm-40">
                @foreach($contact_headers as $contact_header)
                    @if($contact_header->is_publish == 1)
                    @if (app()->getLocale() == 'en')
                        {{$contact_header->getTranslation('title', 'en')}}
                    @elseif(app()->getLocale() == 'ar')
                        {{$contact_header->getTranslation('title', 'ar')}}
                    @endif
                    @endif
                @endforeach
            </h2>
            @include('layouts.flash-message')
            <div class="row mb-60 mb-xs-40">

                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                     @foreach($contact_requests as $contact_request)
                        @if($contact_request->is_publish == 1)
                        <!-- Phone -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item sales-contact">
                                <a href="#" class="btn btn-mod btn-border contact-border btn-circle btn-large sales-btn" data-toggle="modal" data-target="#salesModal">
                                    <div class="icon-svg">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                             width="50px" height="50px" viewBox="0 0 224.000000 225.000000"
                                             preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,225.000000) scale(0.100000,-0.100000)"
                                               fill="#777" stroke="none">
                                                <path d="M682 2240 c-258 -35 -487 -205 -602 -445 -67 -139 -75 -182 -75 -425
                                                        0 -248 8 -289 79 -435 106 -214 291 -362 523 -418 l93 -22 0 -195 c0 -176 2
-198 20 -227 39 -64 111 -88 175 -58 23 12 113 100 248 247 l212 228 50 0
c391 1 694 218 807 580 21 69 23 92 23 300 -1 254 -8 296 -75 435 -78 163
-196 282 -355 360 -155 76 -165 77 -640 81 -231 1 -449 -2 -483 -6z m971 -158
c107 -40 181 -86 252 -157 77 -78 124 -151 163 -253 24 -62 26 -82 30 -267 4
-229 -6 -293 -64 -411 -77 -156 -222 -280 -394 -335 -48 -16 -102 -22 -206
-26 l-141 -6 -224 -243 -224 -242 -3 242 -2 243 -88 6 c-187 14 -345 94 -469
240 -53 63 -108 173 -127 257 -22 90 -22 393 -1 475 59 232 247 424 477 485
68 18 104 19 518 17 427 -3 447 -4 503 -25z"/><path d="M950 1885 c0 -5 14 -160 32 -344 37 -385 22 -351 158 -351 74 0 80 1
84 23 5 22 66 642 66 664 0 16 -340 23 -340 8z"/><path d="M1050 1022 c-56 -56 -33 -146 44 -172 63 -21 126 29 126 101 0 55-33 90 -92 96 -42 5 -50 3 -78 -25z"/>
                                            </g>
                                        </svg>
                                    </div>
                                    @if (app()->getLocale() == 'en')
                                        {{$contact_request->getTranslation('sales_title', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$contact_request->getTranslation('sales_title', 'ar')}}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!-- End Phone -->

                        <!-- Address -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item support-contact">
                                <a href="#" class="btn btn-mod btn-border contact-border btn-circle btn-large sales-btn" data-toggle="modal" data-target="#supportModal">
                                    <div class="icon-svg">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                             width="50px" height="50px" viewBox="0 0 200.000000 200.000000"
                                             preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
                                               fill="#777" stroke="none">
                                                <path d="M865 1886 c-131 -30 -243 -92 -313 -172 -52 -58 -101 -152 -108 -207
-8 -53 -10 -57 -49 -78 -16 -9 -40 -36 -52 -60 -20 -38 -23 -58 -23 -171 0
-86 5 -139 14 -161 18 -45 67 -84 115 -92 37 -6 42 -10 52 -47 23 -88 64 -118
159 -118 57 0 64 -3 102 -38 l40 -38 -20 -41 c-24 -46 -82 -100 -115 -108
-238 -52 -376 -107 -419 -165 -24 -33 -40 -123 -36 -212 l3 -73 785 0 785 0 3
50 c5 80 -15 203 -39 236 -35 50 -192 116 -354 149 -77 16 -104 30 -144 76
-58 65 -60 79 -19 122 53 55 113 144 138 208 l23 55 29 -28 c26 -25 37 -28 93
-28 69 0 99 15 139 69 19 24 21 44 24 169 3 132 2 145 -20 186 -13 24 -36 51
-53 60 -37 20 -45 30 -45 58 0 83 -95 227 -195 298 -133 95 -343 137 -500 101z
m316 -59 c175 -63 281 -171 318 -321 7 -27 11 -50 9 -51 -2 -2 -18 -5 -37 -7
-31 -3 -35 0 -46 32 -60 174 -180 275 -352 300 -133 18 -282 -20 -372 -96 -42
-35 -92 -112 -117 -180 -10 -28 -22 -52 -26 -53 -5 0 -22 -1 -38 -1 -30 0 -31
1 -24 38 10 61 58 154 107 208 67 74 200 139 322 158 66 10 191 -3 256 -27z
m-9 -134 c81 -39 143 -101 182 -183 27 -59 31 -76 34 -186 5 -148 -16 -244
-83 -381 -34 -70 -61 -107 -112 -157 l-67 -66 27 -55 c30 -61 88 -130 126
-150 14 -7 53 -18 86 -25 155 -31 313 -95 340 -136 9 -15 19 -59 23 -109 l8
-85 -734 0 -735 0 5 85 c4 53 12 94 22 109 22 34 129 82 249 112 172 42 178
44 222 85 24 22 58 69 77 104 l33 64 -30 30 -29 31 107 0 c100 0 107 1 121 23
32 48 -4 87 -81 87 -26 0 -42 -8 -63 -31 -27 -28 -33 -30 -87 -27 l-58 3 -46
83 c-79 141 -94 202 -94 377 0 148 1 151 32 217 36 76 96 139 165 174 70 36
113 44 210 40 71 -3 98 -9 150 -33z m-628 -319 c12 -31 7 -349 -6 -362 -7 -7
-32 -12 -56 -12 -35 0 -49 6 -73 29 l-29 29 0 142 c0 136 1 142 25 165 20 20
34 25 78 25 41 0 56 -4 61 -16z m1031 10 c35 -14 45 -58 45 -194 l0 -132 -29
-29 c-24 -23 -38 -29 -73 -29 -24 0 -49 5 -56 12 -13 13 -18 359 -5 371 8 9
96 9 118 1z m-895 -552 c0 -9 -81 6 -95 18 -8 7 -20 30 -27 51 -11 37 -10 41
18 70 l28 30 38 -82 c21 -45 38 -84 38 -87z"/></g>
                                        </svg>
                                    </div>
                                    @if (app()->getLocale() == 'en')
                                        {{$contact_request->getTranslation('support_title', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$contact_request->getTranslation('support_title', 'ar')}}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!-- End Address -->
                        <!-- Address -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item career-contact">
                                <a href="{{route('careers', app()->getLocale())}}" class="btn btn-mod btn-border contact-border btn-circle btn-large sales-btn">
                                    <div class="icon-svg">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                             width="50px" height="50px" viewBox="0 0 1000.000000 1000.000000"
                                             preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,1000.000000) scale(0.100000,-0.100000)"
                                               fill="#777" stroke="none">
                                                <path d="M4350 8404 c-762 -50 -1420 -350 -1930 -881 -440 -457 -708 -1022
-791 -1668 -22 -165 -17 -571 8 -735 100 -641 359 -1171 792 -1614 299 -305
620 -521 1006 -674 851 -338 1850 -242 2610 252 l80 52 731 -723 c401 -398
748 -736 770 -750 103 -70 272 -100 392 -69 157 40 284 141 352 280 78 157 77
309 -2 469 -40 80 -55 96 -768 812 l-727 730 58 89 c207 317 360 734 421 1150
32 216 32 576 0 792 -49 332 -144 634 -293 924 -433 846 -1265 1428 -2205
1544 -123 15 -407 26 -504 20z m305 -1054 c359 -34 689 -165 970 -385 109 -85
286 -271 367 -385 133 -187 249 -450 297 -671 187 -873 -278 -1755 -1104
-2092 -458 -187 -974 -180 -1428 19 -498 218 -894 678 -1033 1198 -82 308 -84
633 -8 936 129 513 484 953 959 1190 319 159 642 221 980 190z"/><path d="M4033 6709 c-48 -31 -63 -81 -63 -214 l0 -114 -272 -3 -273 -3 -48
-28 c-33 -19 -56 -44 -77 -80 l-30 -52 0 -292 0 -293 1235 0 1235 0 0 293 0
292 -30 52 c-21 36 -44 61 -77 80 l-48 28 -272 3 -273 3 0 114 c0 135 -15 184
-65 215 -31 19 -48 20 -471 20 -423 0 -440 -1 -471 -21z m827 -239 l0 -90
-355 0 -355 0 0 90 0 90 355 0 355 0 0 -90z"/><path d="M3272 5121 l3 -369 30 -44 c20 -28 49 -52 84 -70 l55 -28 1061 0
1061 0 55 28 c35 18 64 42 84 70 l30 44 3 369 3 369 -460 0 -459 0 -4 -125
c-3 -121 -4 -125 -31 -152 l-27 -28 -255 0 -255 0 -27 28 c-27 27 -28 31 -31
152 l-4 125 -459 0 -460 0 3 -369z"/><path d="M4330 5405 l0 -85 175 0 175 0 0 85 0 85 -175 0 -175 0 0 -85z"/></g>
                                        </svg>
                                    </div>
                                    @if (app()->getLocale() == 'en')
                                        {{$contact_request->getTranslation('career_title', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$contact_request->getTranslation('career_title', 'ar')}}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <!-- End Address -->
                        @endif
                      @endforeach
                    </div>
                </div>

            </div>
            <div class="row mb-60 mb-xs-40">
               @foreach($contacts as $contact)
                @if($contact->is_publish == 1)
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <!-- Phone -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon">
                                    <i class="fa {{$contact->phone_icon}}"></i>
                                </div>
                                <div class="ci-title font-alt">
                                    @if (app()->getLocale() == 'en')
                                        {{$contact->getTranslation('phone_title', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$contact->getTranslation('phone_title', 'ar')}}
                                    @endif
                                </div>
                                <div class="ci-text">
                                    <a href="tel:{{$contact->phone}}">Tel:  {{$contact->phone}}</a>
                                </div>
                                <div class="ci-text">
                                    Fax: {{$contact->fax}}
                                </div>
                            </div>
                        </div>
                        <!-- End Phone -->
                        <!-- Address -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon">
                                    <i class="fa {{$contact->address_icon}}"></i>
                                </div>
                                <div class="ci-title font-alt">
                                    @if (app()->getLocale() == 'en')
                                        {{$contact->getTranslation('address_title', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$contact->getTranslation('address_title', 'ar')}}
                                    @endif
                                </div>
                                <div class="ci-text">
                                    @if (app()->getLocale() == 'en')
                                        {{$contact->getTranslation('address', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$contact->getTranslation('address', 'ar')}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Address -->
                        <!-- Email -->
                        <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                            <div class="contact-item">
                                <div class="ci-icon">
                                    <i class="fa {{$contact->email_icon}}"></i>
                                </div>
                                <div class="ci-title font-alt">
                                    @if (app()->getLocale() == 'en')
                                        {{$contact->getTranslation('email_title', 'en')}}
                                    @elseif(app()->getLocale() == 'ar')
                                        {{$contact->getTranslation('email_title', 'ar')}}
                                    @endif
                                </div>
                                <div class="ci-text">
                                    <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Email -->
                    </div>
                </div>
                @endif
               @endforeach
            </div>
        </div>
    </section>
    <!-- End Contact Details Section -->
    <!-- Google Map -->
    @foreach($contact_maps as $contact_map)
    @if($contact_map->is_publish == 1)
    <div class="google-map">
        <a href="#" class="map-section">
            <div class="map-toggle">
                <div class="mt-icon">
                    <i class="fa {{$contact_map->icon}}"></i>
                </div>
                <div class="mt-text font-alt">
                    <div class="mt-open">
                        @if (app()->getLocale() == 'en')
                            {{$contact_map->getTranslation('open_title', 'en')}}
                        @elseif(app()->getLocale() == 'ar')
                            {{$contact_map->getTranslation('open_title', 'ar')}}
                        @endif
                        <i class="fa fa-angle-down"></i></div>
                    <div class="mt-close">
                        @if (app()->getLocale() == 'en')
                            {{$contact_map->getTranslation('close_title', 'en')}}
                        @elseif(app()->getLocale() == 'ar')
                            {{$contact_map->getTranslation('close_title', 'ar')}}
                        @endif
                        <i class="fa fa-angle-up"></i></div>
                </div>
            </div>
        </a>
        <iframe src="{{$contact_map->link}}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    @endif
    @endforeach
    <!-- End Google Map -->
    @include('front.contact.modal_contact')
@stop
@section('scripts')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@stop
