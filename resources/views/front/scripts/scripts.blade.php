<!-- jQuery -->
<script src="{{asset('public/assets/front/js/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/animsition.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('public/assets/front/js/smoothscroll.js')}}"></script>--}}
<script src="{{asset('public/assets/front/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/plugins.js')}}"></script>
<script src="{{asset('public/assets/front/js/sly.min.js')}}"></script>
<!-- Slider revolution -->
<script src="{{asset('public/assets/front/js/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Slider revolution 5x Extensions   -->
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider/revolution.extension.video.min.js')}}"></script>
<!-- Scripts -->
<script src="{{asset('public/assets/front/js/scripts.js')}}"></script>
<script src="{{asset('public/assets/front/js/rev-slider-init.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('public/assets/job/js/superfish.min.js')}}"></script>
<script src="{{asset('public/assets/job/js/easing.min.js')}}"></script>
<script src="{{asset('public/assets/job/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('public/assets/job/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/assets/job/js/jquery.sticky.js')}}"></script>
<script src="{{asset('public/assets/job/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('public/assets/job/js/parallax.min.js')}}"></script>
<script src="{{asset('public/assets/job/js/main.js')}}"></script>
<script src="{{asset('public/assets/admin/assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
{{--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>--}}
{{-- ========================== Google Translator ================================--}}
{{--<script type="text/javascript">--}}
{{--    $.cookie('googtrans', '/en/ar');--}}
{{--    function googleTranslateElementInit() {--}}
{{--        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');--}}
{{--    }--}}
{{--</script>--}}
{{-- ========================== End Google Translator ============================--}}
<!-- Google Tag Analytics -->
@foreach($analytics as $analytic)
    @if($analytic->is_publish == 1)
         {!! $analytic->footer !!}
    @endif
@endforeach
<!--End Google Tag Analytics -->
<!-- Google Tag Manager -->
@foreach($tag_managers as $tag_manager)
    @if($tag_manager->is_publish == 1)
        {!! $tag_manager->gtm_footer !!}
    @endif
@endforeach
<!--End Google Tag Manager -->
<!-- Footer Input -->
@foreach($footer_spaces as $footer_space)
    @if($footer_space->is_publish == 1)
        {!! $footer_space->footer_space !!}
    @endif
@endforeach

<script>
    {{-- ======================== Position Name Careers =========================   --}}
    document.getElementsByClassName('position').value = localStorage.getItem('position');
    {{-- ======================== End Position Name Careers =====================   --}}
{{-- ======================== Getting Brochure Name For Request Brochurues =========================   --}}
document.getElementsByClassName('brochure_id').value = localStorage.getItem('brochure_id');
{{-- ======================== End Getting Brochure Name For Request Brochurues =====================   --}}
{{-- ==========================Job Careers Apply Job Modal Remover==================================== --}}
$('#applyModal').on('show.bs.modal', function (event) {
    $('.modal').remove();
    $('.modal-backdrop').remove();
});
{{--  =======================End Job Careers Apply Job Modal Block Remover============================= --}}
{{-- ==========================Brochure Request  Modal Remover==================================== --}}
$('#brochureModal').on('show.bs.modal', function (event) {
    $('.modal').remove();
    $('.modal-backdrop').remove();
});
    {{--  =======================End Brochure Request Modal Block Remover============================= --}}
</script>
<!--End Footer Input -->
