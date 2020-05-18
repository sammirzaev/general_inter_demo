<!-- Foter -->
<footer class="page-section bg-gray-lighter footer pb-60">
    <div class="container">
        <!-- Footer Logo -->
        <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
            @foreach($footer_logos as $logo)
            @if($logo->is_publish == 1)
            <a href="#top">
                <img src="{{$logo->logo}}"
                     width="35"
                     height="35"
                     alt="@if (app()->getLocale() == 'en')
                     {{$logo->getTranslation('title', 'en')}}
                     @elseif(app()->getLocale() == 'ar')
                     {{$logo->getTranslation('title', 'ar')}}
                     @endif" />
            </a>
            @endif
            @endforeach
        </div>
        <!-- End Footer Logo -->
        <!-- Social Links -->
        <div class="footer-social-links mb-110 mb-xs-60">
            @foreach($footer_socials as $socials)
            @if($socials->is_publish == 1)
            <a href="{{$socials->link}}"
               title="@if (app()->getLocale() == 'en')
               {{$socials->getTranslation('title', 'en')}}
               @elseif(app()->getLocale() == 'ar')
               {{$socials->getTranslation('title', 'ar')}}
               @endif"
               class="{{$socials->class}}"
               target="_blank">
                <i class="fa {{$socials->icon}}"></i>
            </a>
            @endif
            @endforeach
        </div>
        <!-- End Social Links -->
        <!-- Footer Text -->
        <div class="footer-text">
            <!-- Copyright -->
            <div class="footer-copy font-alt">
                @foreach($footer_titles as $footer_title)
                @if($footer_title->is_publish == 1)
                <a href="#top">
                    @if (app()->getLocale() == 'en')
                        {{$footer_title->getTranslation('footer_title', 'en')}}
                    @elseif(app()->getLocale() == 'ar')
                        {{$footer_title->getTranslation('footer_title', 'ar')}}
                    @endif
                </a>
                @endif
                @endforeach
            </div>
            <!-- End Copyright -->
            <div class="footer-made">
                &copy; All Copyrights Reserved
            </div>
        </div>
        <!-- End Footer Text -->
    </div>
    <!-- Top Link -->
    <div class="local-scroll">
        <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- End Top Link -->
</footer>
<!-- End Foter -->
<!-- Email Button -->
<!--            <a href="" target="_blank" class="buy-button"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> <span>Email</span></a>-->
<!-- End Email Button -->
