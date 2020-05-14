<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('public/assets/admin/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('public/assets/admin/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('public/assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('public/assets/admin/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('public/assets/admin/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('public/assets/admin/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('public/assets/admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('public/assets/admin/js/custom.min.js')}}"></script>
<!-- Footable -->
<script src="{{asset('public/assets/admin/assets/plugins/footable/js/footable.all.min.js')}}"></script>
<script src="{{asset('public/assets/admin/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>

<!--FooTable init-->
<script src="{{asset('public/assets/admin/js/footable-init.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--sparkline JavaScript -->
<script src="{{asset('public/assets/admin/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--morris JavaScript -->
<script src="{{asset('public/assets/admin/assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('public/assets/admin/assets/plugins/morrisjs/morris.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('public/assets/admin/js/dashboard1.js')}}"></script>
<!-- Dropzone Plugin JavaScript -->
<script src="{{asset('public/assets/admin/assets/plugins/dropzone-master/dist/dropzone.js')}}"></script>
<script src="{{asset('public/assets/admin/assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{asset('public/assets/admin/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
<!-- jQuery file upload -->
<script src="{{asset('public/assets/admin/assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script src="{{ asset('public/vendor/file-manager/js/file-manager.js') }}"></script>
<!-- wysuhtml5 Plugin JavaScript -->
<script src="{{asset('public/assets/admin/assets/plugins/tinymce/tinymce.min.js')}}"></script>
<script>
    document.getElementsByClassName('position').value = localStorage.getItem('position');
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    //===================User Confirm Delete=====================
    $('#userConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let user_id = button.data('userid');
        let modal = $(this);
        modal.find('.modal-body #user_id').val(user_id);
    });
    //===================End User Confirm Delete=================
    //===================Photo Confirm Delete=====================
    $('#photoConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let photo_id = button.data('photoid');
        let modal = $(this);
        modal.find('.modal-body #photo_id').val(photo_id);
    });
    //===================End Photo Confirm Delete=================
    //===================Role Confirm Delete=====================
    $('#roleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let role_id = button.data('roleid');
        let modal = $(this);
        modal.find('.modal-body #role_id').val(role_id);
    });
    //===================End Role Confirm Delete=================
    //===================Position Confirm Delete=====================
    $('#positionConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let position_id = button.data('positionid');
        let modal = $(this);
        modal.find('.modal-body #position_id').val(position_id);
    });
    //===================End Position Confirm Delete=================
    //===================Meta Key Confirm Delete=====================
    $('#keyConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let key_id = button.data('keyid');
        let modal = $(this);
        modal.find('.modal-body #key_id').val(key_id);
    });
    //===================End Meta Key Confirm Delete=================
    //===================Meta Desc Confirm Delete=====================
    $('#descConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let desc_id = button.data('descid');
        let modal = $(this);
        modal.find('.modal-body #desc_id').val(desc_id);
    });
    //===================End Meta Desc Confirm Delete=================
    //===================Meta Subject & Copyright Confirm Delete=====================
    $('#subConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let sub_id = button.data('subid');
        let modal = $(this);
        modal.find('.modal-body #sub_id').val(sub_id);
    });
    //===================End Subject & CopyrightConfirm Delete=================
    //===================Meta URL Dist Coverage Confirm Delete=====================
    $('#urlConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let url_id = button.data('urlid');
        let modal = $(this);
        modal.find('.modal-body #url_id').val(url_id);
    });
    //===================End Meta URL Dist Coverage Confirm Delete=================
    //===================OG Title Confirm Delete=====================
    $('#titleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let title_id = button.data('titleid');
        let modal = $(this);
        modal.find('.modal-body #title_id').val(title_id);
    });
    //===================End OG Title Confirm Delete=================
    //===================OG Type URL Image Confirm Delete=====================
    $('#typeConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let type_id = button.data('typeid');
        let modal = $(this);
        modal.find('.modal-body #type_id').val(type_id);
    });
    //===================End OG Type URL Image Confirm Delete=================
    //===================OG Site Name & Desc Confirm Delete=====================
    $('#siteConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let site_id = button.data('siteid');
        let modal = $(this);
        modal.find('.modal-body #site_id').val(site_id);
    });
    //===================End OG Site Name & Desc Confirm Delete=================
    //===================Google Analytics Confirm Delete=====================
    $('#analyticConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let analytic_id = button.data('analyticid');
        let modal = $(this);
        modal.find('.modal-body #analytic_id').val(analytic_id);
    });
    //===================End Google Analytics Confirm Delete=================
    //===================Google Verification Confirm Delete=====================
    $('#verifyConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let verify_id = button.data('verifyid');
        let modal = $(this);
        modal.find('.modal-body #verify_id').val(verify_id);
    });
    //===================End Google Verification Confirm Delete=================
    //===================Google TM Confirm Delete=====================
    $('#tagConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let tag_id = button.data('tagid');
        let modal = $(this);
        modal.find('.modal-body #tag_id').val(tag_id);
    });
    //===================End Google TM Confirm Delete=================
    //===================Header Space Confirm Delete=====================
    $('#headConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let header_id = button.data('headerid');
        let modal = $(this);
        modal.find('.modal-body #header_id').val(header_id);
    });
    //===================End Header Space Confirm Delete=================
    //===================Footer Space Confirm Delete=====================
    $('#footConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let footer_id = button.data('footerid');
        let modal = $(this);
        modal.find('.modal-body #footer_id').val(footer_id);
    });
    //===================End Footer Space Confirm Delete=================
    //===================Facebook Confirm Delete=====================
    $('#facebookConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let facebook_id = button.data('facebookid');
        let modal = $(this);
        modal.find('.modal-body #facebook_id').val(facebook_id);
    });
    //===================End Facebook Confirm Delete=================
    //===================Twitter Domain & URL Confirm Delete=====================
    $('#domConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let dom_id = button.data('domid');
        let modal = $(this);
        modal.find('.modal-body #dom_id').val(dom_id);
    });
    //===================End Twitter Domain & URL Confirm Delete=================
    //===================Twitter Domain & URL Confirm Delete=====================
    $('#siteConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let site_id = button.data('siteid');
        let modal = $(this);
        modal.find('.modal-body #site_id').val(site_id);
    });
    //===================End Twitter Domain & URL Confirm Delete=================
    //===================Twitter Domain & URL Confirm Delete=====================
    $('#cardConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let card_id = button.data('cardid');
        let modal = $(this);
        modal.find('.modal-body #card_id').val(card_id);
    });
    //===================End Twitter Domain & URL Confirm Delete=================
    //===================Twitter Title & Description Confirm Delete=====================
    $('#titleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let title_id = button.data('titleid');
        let modal = $(this);
        modal.find('.modal-body #title_id').val(title_id);
    });
    //===================End Twitter Title & Description Confirm Delete=================
    //===================Robots Engine Confirm Delete=====================
    $('#robotsConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let robot_id = button.data('robotid');
        let modal = $(this);
        modal.find('.modal-body #robot_id').val(robot_id);
    });
    //===================End Robots Engine Confirm Delete=================
    //===================Brand Media Confirm Delete=====================
    $('#mediaConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let media_id = button.data('mediaid');
        let modal = $(this);
        modal.find('.modal-body #media_id').val(media_id);
    });
    //===================End Brand Media Confirm Delete=================
    //===================Job Brand Confirm Delete=====================
    $('#brandConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let brand_id = button.data('brandid');
        let modal = $(this);
        modal.find('.modal-body #brand_id').val(brand_id);
    });
    //===================End Job Brand Confirm Delete=================
    //===================Job Category Confirm Delete=====================
    $('#catConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let cat_id = button.data('catid');
        let modal = $(this);
        modal.find('.modal-body #cat_id').val(cat_id);
    });
    //===================End Job Category Confirm Delete=================
    //===================Job Location Confirm Delete=====================
    $('#locationConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let location_id = button.data('locationid');
        let modal = $(this);
        modal.find('.modal-body #location_id').val(location_id);
    });
    //===================End Job Location Confirm Delete=================
    //===================Job Salary Confirm Delete=====================
    $('#salaryConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let salary_id = button.data('salaryid');
        let modal = $(this);
        modal.find('.modal-body #salary_id').val(salary_id);
    });
    //===================End Job Salary Confirm Delete=================
    //===================Job Type Confirm Delete=====================
    $('#typeConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let type_id = button.data('typeid');
        let modal = $(this);
        modal.find('.modal-body #type_id').val(type_id);
    });
    //===================End Job Type Confirm Delete=================
    //===================Job Career Confirm Delete=====================
    $('#careerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let career_id = button.data('careerid');
        let modal = $(this);
        modal.find('.modal-body #career_id').val(career_id);
    });
    //===================End Job Career Confirm Delete=================
    //==========================Tinymce============================================
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    //==========================End Tinymce============================================
    //===================Job Career Email Confirm Delete=====================
    $('#careerContactConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let careercon_id = button.data('careerconid');
        let modal = $(this);
        modal.find('.modal-body #careercon_id').val(careercon_id);
    });
    //===================End Job Career Email Confirm Delete=================
    //===================Job Candidate Confirm Delete=====================
    $('#candidateContactConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let candidate_id = button.data('candidateid');
        let modal = $(this);
        modal.find('.modal-body #candidate_id').val(candidate_id);
    });
    //===================End Job Candidate Confirm Delete=================
    //===================Brochures Confirm Delete=====================
    $('#brochureContactConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let brochure_id = button.data('brochureid');
        let modal = $(this);
        modal.find('.modal-body #brochure_id').val(brochure_id);
    });
    //===================End Brochures Confirm Delete=================
    //===================Brochures Filter Confirm Delete=====================
    $('#filterContactConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let filter_id = button.data('filterid');
        let modal = $(this);
        modal.find('.modal-body #filter_id').val(filter_id);
    });
    //===================End Brochures Filter Confirm Delete=================
    //===================Brochures Requester Confirm Delete=====================
    $('#requestContactConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let request_id = button.data('requestid');
        let modal = $(this);
        modal.find('.modal-body #request_id').val(request_id);
    });
    //===================End Brochures Requester Confirm Delete=================
    //=================== Filter Candidates =====================
    $('#job_id').on('change', function() {
        this.form.submit();
    });
    //===================End Filter Candidates =================
    //===================Email Configuration Confirm Delete=====================
    $('#emailConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let email_id = button.data('emailid');
        let modal = $(this);
        modal.find('.modal-body #email_id').val(email_id);
    });
    //===================End Email Configuration Confirm Delete=================
    //=================== CC Email Configuration Confirm Delete=====================
    $('#ccConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let cc_id = button.data('ccid');
        let modal = $(this);
        modal.find('.modal-body #cc_id').val(cc_id);
    });
    //===================End CC Email Configuration Confirm Delete=================
    //=================== BCC Email Configuration Confirm Delete=====================
    $('#bccConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let bcc_id = button.data('bccid');
        let modal = $(this);
        modal.find('.modal-body #bcc_id').val(bcc_id);
    });
    //===================End BCC Email Configuration Confirm Delete=================

</script>
