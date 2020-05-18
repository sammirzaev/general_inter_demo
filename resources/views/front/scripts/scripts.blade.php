<!-- JS -->
<script type="text/javascript" src="{{asset('assets/front/js/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.localScroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.viewport.mini.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.simple-text-rotator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.lazyload.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/all.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/timeline.js')}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{asset('assets/admin/assets/plugins/toast-master/js/jquery.toast.js')}}"></script>

<!--[endif]-->
@yield('scripts')
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
{{--  =======================Activator inside tabs============================= --}}
$(document).ready(function () {
    $("#tabs1 a").on("click", function (e) {
        e.preventDefault();
        $('#tabs2 li:first-child a').tab('show')
    });
});
{{--  =======================End Activator inside tabs============================= --}}

</script>
<!--End Footer Input -->
