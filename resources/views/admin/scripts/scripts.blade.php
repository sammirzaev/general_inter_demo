<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/admin/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/admin/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('assets/admin/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('assets/admin/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('assets/admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('assets/admin/js/custom.min.js')}}"></script>
<!-- Footable -->
<script src="{{asset('assets/admin/assets/plugins/footable/js/footable.all.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>

<!--FooTable init-->
<script src="{{asset('assets/admin/js/footable-init.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--sparkline JavaScript -->
<script src="{{asset('assets/admin/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--morris JavaScript -->
<script src="{{asset('assets/admin/assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/morrisjs/morris.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('assets/admin/js/dashboard1.js')}}"></script>
<!-- Dropzone Plugin JavaScript -->
<script src="{{asset('assets/admin/assets/plugins/dropzone-master/dist/dropzone.js')}}"></script>
<script src="{{asset('assets/admin/assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
{{--<script src="{{asset('assets/admin/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>--}}
<!-- jQuery file upload -->
<script src="{{asset('assets/admin/assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<!-- wysuhtml5 Plugin JavaScript -->
<script src="{{asset('assets/admin/assets/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
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
                   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

               });
           }
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
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

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
    //=================== Home Title Confirm Delete=====================
    $('#homeConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let home_id = button.data('homeid');
        let modal = $(this);
        modal.find('.modal-body #home_id').val(home_id);
    });
    //===================End Home Title Confirm Delete=================
    //=================== Service Title Confirm Delete=====================
    $('#serviceConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let service_id = button.data('serviceid');
        let modal = $(this);
        modal.find('.modal-body #service_id').val(service_id);
    });
    //===================End Service Title Confirm Delete=================
    //=================== Project Title Confirm Delete=====================
    $('#projectConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let project_id = button.data('projectid');
        let modal = $(this);
        modal.find('.modal-body #project_id').val(project_id);
    });
    //===================End Project Title Confirm Delete=================
    //=================== Brochure Title Confirm Delete=====================
    $('#brochureTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let brochuretitle_id = button.data('brochuretitleid');
        let modal = $(this);
        modal.find('.modal-body #brochuretitle_id').val(brochuretitle_id);
    });
    //===================End Brochure Title Confirm Delete=================
    //=================== Career Title Confirm Delete=====================
    $('#careerTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let careertitle_id = button.data('careertitleid');
        let modal = $(this);
        modal.find('.modal-body #careertitle_id').val(careertitle_id);
    });
    //===================End Career Title Confirm Delete=================
    //=================== ContactDetails Title Confirm Delete=====================
    $('#contactTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let contacttitle_id = button.data('contacttitleid');
        let modal = $(this);
        modal.find('.modal-body #contacttitle_id').val(contacttitle_id);
    });
    //===================End ContactDetails Title Confirm Delete=================
    //=================== Fire Title Confirm Delete=====================
    $('#fireTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let fire_id = button.data('fireid');
        let modal = $(this);
        modal.find('.modal-body #fire_id').val(fire_id);
    });
    //===================End Fire Title Confirm Delete=================
    //=================== Security Title Confirm Delete=====================
    $('#securityTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let security_id = button.data('securityid');
        let modal = $(this);
        modal.find('.modal-body #security_id').val(security_id);
    });
    //===================End Security Title Confirm Delete=================
    //=================== Water Title Confirm Delete=====================
    $('#waterTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let water_id = button.data('waterid');
        let modal = $(this);
        modal.find('.modal-body #water_id').val(water_id);
    });
    //===================End Water Title Confirm Delete=================
    //=================== Water Title Confirm Delete=====================
    $('#facilityTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let facility_id = button.data('facilityid');
        let modal = $(this);
        modal.find('.modal-body #facility_id').val(facility_id);
    });
    //===================End Water Title Confirm Delete=================
    //=================== Water Title Confirm Delete=====================
    $('#newsTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let news_id = button.data('newsid');
        let modal = $(this);
        modal.find('.modal-body #news_id').val(news_id);
    });
    //===================End Water Title Confirm Delete=================
    //=================== Water Title Confirm Delete=====================
    $('#caseTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let case_id = button.data('caseid');
        let modal = $(this);
        modal.find('.modal-body #case_id').val(case_id);
    });
    //===================End Water Title Confirm Delete=================
    //=================== Home Banner Confirm Delete=====================
    $('#homeBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let banner_id = button.data('bannerid');
        let modal = $(this);
        modal.find('.modal-body #banner_id').val(banner_id);
    });
    //===================End Water Title Confirm Delete=================
    //=================== Home Service Category Confirm Delete==========
    $('#serviceCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let servicecat_id = button.data('servicecatid');
        let modal = $(this);
        modal.find('.modal-body #servicecat_id').val(servicecat_id);
    });
    //===================End Home Service Category Confirm Delete=========
    //=================== Home Service Confirm Delete=====================
    $('#homeServiceConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let homeservice_id = button.data('homeserviceid');
        let modal = $(this);
        modal.find('.modal-body #homeservice_id').val(homeservice_id);
    });
    //===================End Home Service Confirm Delete==================
    //=================== Home Partners Confirm Delete=====================
    $('#homePartnersConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let partner_id = button.data('partnerid');
        let modal = $(this);
        modal.find('.modal-body #partner_id').val(partner_id);
    });
    //===================End Home Partners Confirm Delete==================
    //=================== About Banner Confirm Delete=====================
    $('#aboutBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let aboutbanner_id = button.data('aboutbannerid');
        let modal = $(this);
        modal.find('.modal-body #aboutbanner_id').val(aboutbanner_id);
    });
    //===================End About Banner Confirm Delete==================
    //=================== About Concept Confirm Delete=====================
    $('#aboutConceptConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let concept_id = button.data('conceptid');
        let modal = $(this);
        modal.find('.modal-body #concept_id').val(concept_id);
    });
    //===================End About Concept Confirm Delete==================
    //=================== About Story Category Confirm Delete==============
    $('#storyCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let storycat_id = button.data('storycatid');
        let modal = $(this);
        modal.find('.modal-body #storycat_id').val(storycat_id);
    });
    //===================End About Story Category Confirm Delete============
    //=================== About Company Confirm Delete======================
    $('#aboutCompanyConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let company_id = button.data('companyid');
        let modal = $(this);
        modal.find('.modal-body #company_id').val(company_id);
    });
    //===================End About Company Confirm Delete===================
    //=================== About Diversity First Confirm Delete==============
    $('#diversityOneConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let diversityone_id = button.data('diversityoneid');
        let modal = $(this);
        modal.find('.modal-body #diversityone_id').val(diversityone_id);
    });
    //===================End About Diversity First Confirm Delete============
    //=================== About Diversity Second Confirm Delete==============
    $('#diversityTwoConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let diversitytwo_id = button.data('diversitytwoid');
        let modal = $(this);
        modal.find('.modal-body #diversitytwo_id').val(diversitytwo_id);
    });
    //===================End About Diversity Second Confirm Delete============
    //=================== About Diversity Icon Confirm Delete=================
    $('#diversityIconConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let diversityicon_id = button.data('diversityiconid');
        let modal = $(this);
        modal.find('.modal-body #diversityicon_id').val(diversityicon_id);
    });
    //===================End About Diversity Icon Confirm Delete=============
    //=================== About Leadership Media Confirm Delete==============
    $('#leadershipMediaConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let leadmedia_id = button.data('leadmediaid');
        let modal = $(this);
        modal.find('.modal-body #leadmedia_id').val(leadmedia_id);
    });
    //===================End About Leadership Media Confirm Delete=============
    //=================== About Leadership Confirm Delete======================
    $('#leadershipConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let leader_id = button.data('leaderid');
        let modal = $(this);
        modal.find('.modal-body #leader_id').val(leader_id);
    });
    //===================End About Leadership Confirm Delete===================
    //=================== About Timeline Category Confirm Delete================
    $('#timelineCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let timecat_id = button.data('timecatid');
        let modal = $(this);
        modal.find('.modal-body #timecat_id').val(timecat_id);
    });
    //===================End About Timeline Category Confirm Delete==============
    //=================== About Timeline Category Confirm Delete================
    $('#timelineConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let timeline_id = button.data('timelineid');
        let modal = $(this);
        modal.find('.modal-body #timeline_id').val(timeline_id);
    });
    //===================End About Timeline Category Confirm Delete==============
    //=================== About Policy Confirm Delete============================
    $('#aboutPolicyConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let policy_id = button.data('policyid');
        let modal = $(this);
        modal.find('.modal-body #policy_id').val(policy_id);
    });
    //===================End About Policy Confirm Delete=========================
    //=================== Fire Type Confirm Delete===============================
    $('#fireTypeConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let firetype_id = button.data('firetypeid');
        let modal = $(this);
        modal.find('.modal-body #firetype_id').val(firetype_id);
    });
    //===================End Fire Type Confirm Delete=============================
    //=================== Security Type Confirm Delete============================
    $('#securityTypeConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let securitytype_id = button.data('securitytypeid');
        let modal = $(this);
        modal.find('.modal-body #securitytype_id').val(securitytype_id);
    });
    //===================End Security Type Confirm Delete===========================
    //=================== Water Type Confirm Delete============================
    $('#waterTypeConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let watertype_id = button.data('watertypeid');
        let modal = $(this);
        modal.find('.modal-body #watertype_id').val(watertype_id);
    });
    //===================End Water Type Confirm Delete===========================
    //=================== Facility Type Confirm Delete============================
    $('#facilityTypeConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let facilitytype_id = button.data('facilitytypeid');
        let modal = $(this);
        modal.find('.modal-body #facilitytype_id').val(facilitytype_id);
    });
    //===================End Facility Type Confirm Delete===========================
    //=================== Fire Category Confirm Delete============================
    $('#fireCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let firecat_id = button.data('firecatid');
        let modal = $(this);
        modal.find('.modal-body #firecat_id').val(firecat_id);
    });
    //===================End Fire Category Confirm Delete===========================
    //=================== Security Category Confirm Delete============================
    $('#securityCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let securitycat_id = button.data('securitycatid');
        let modal = $(this);
        modal.find('.modal-body #securitycat_id').val(securitycat_id);
    });
    //===================End Security Category Confirm Delete===========================
    //=================== Water Category Confirm Delete============================
    $('#waterCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let watercat_id = button.data('watercatid');
        let modal = $(this);
        modal.find('.modal-body #watercat_id').val(watercat_id);
    });
    //===================End Water Category Confirm Delete===========================
    //=================== Facility Category Confirm Delete============================
    $('#facilityCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let facilitycat_id = button.data('facilitycatid');
        let modal = $(this);
        modal.find('.modal-body #facilitycat_id').val(facilitycat_id);
    });
    //===================End Facility Category Confirm Delete===========================
    //=================== Fire Service Confirm Delete============================
    $('#fireServiceConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let fireserv_id = button.data('fireservid');
        let modal = $(this);
        modal.find('.modal-body #fireserv_id').val(fireserv_id);
    });
    //===================End Fire Service Confirm Delete===========================
    //=================== Security Service Confirm Delete============================
    $('#securityServiceConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let securityserv_id = button.data('securityservid');
        let modal = $(this);
        modal.find('.modal-body #securityserv_id').val(securityserv_id);
    });
    //===================End Security Service Confirm Delete===========================
    //=================== Water Service Confirm Delete============================
    $('#waterServiceConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let waterserv_id = button.data('waterservid');
        let modal = $(this);
        modal.find('.modal-body #waterserv_id').val(waterserv_id);
    });
    //===================End Water Service Confirm Delete===========================
    //=================== Facility Service Confirm Delete============================
    $('#facilityServiceConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let facilityserv_id = button.data('facilityservid');
        let modal = $(this);
        modal.find('.modal-body #facilityserv_id').val(facilityserv_id);
    });
    //===================End Facility Service Confirm Delete===========================
    //=================== Fire Banner Confirm Delete===================================
    $('#fireBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let fireb_id = button.data('firebid');
        let modal = $(this);
        modal.find('.modal-body #fireb_id').val(fireb_id);
    });
    //===================End Fire Banner Confirm Delete=================================
    //=================== Security Banner Confirm Delete================================
    $('#securityBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let securityb_id = button.data('securitybid');
        let modal = $(this);
        modal.find('.modal-body #securityb_id').val(securityb_id);
    });
    //===================End Security Banner Confirm Delete=============================
    //=================== Water Banner Confirm Delete===================================
    $('#waterBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let water_id = button.data('waterid');
        let modal = $(this);
        modal.find('.modal-body #water_id').val(water_id);
    });
    //===================End Water Banner Confirm Delete=================================
    //=================== Facility Banner Confirm Delete=================================
    $('#facilityBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let facilityb_id = button.data('facilitybid');
        let modal = $(this);
        modal.find('.modal-body #facilityb_id').val(facilityb_id);
    });
    //===================End Facility Banner Confirm Delete===============================
    //=================== Fire Concept Confirm Delete=====================================
    $('#fireConceptConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let firec_id = button.data('firecid');
        let modal = $(this);
        modal.find('.modal-body #firec_id').val(firec_id);
    });
    //===================End Fire Concept Confirm Delete==================================
    //=================== Security Concept Confirm Delete=================================
    $('#securityConceptConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let securityc_id = button.data('securitycid');
        let modal = $(this);
        modal.find('.modal-body #securityc_id').val(securityc_id);
    });
    //===================End Security Concept Confirm Delete===============================
    //=================== Water Concept Confirm Delete=====================================
    $('#waterConceptConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let waterc_id = button.data('watercid');
        let modal = $(this);
        modal.find('.modal-body #waterc_id').val(waterc_id);
    });
    //===================End Water Concept Confirm Delete==================================
    //=================== Facility Concept Confirm Delete==================================
    $('#facilityConceptConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let facilityc_id = button.data('facilitycid');
        let modal = $(this);
        modal.find('.modal-body #facilityc_id').val(facilityc_id);
    });
    //===================End Facility Concept Confirm Delete===============================
    //=================== Title Concept Confirm Delete=====================================
    $('#conceptConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let conceptt_id = button.data('concepttid');
        let modal = $(this);
        modal.find('.modal-body #conceptt_id').val(conceptt_id);
    });
    //===================End Title Concept Confirm Delete==================================
    //=================== Project Banner Confirm Delete====================================
    $('#projectBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let projectb_id = button.data('projectbid');
        let modal = $(this);
        modal.find('.modal-body #projectb_id').val(projectb_id);
    });
    //===================End Project Banner Confirm Delete==================================
    //=================== Project Category Confirm Delete===================================
    $('#projectCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let projectc_id = button.data('projectcid');
        let modal = $(this);
        modal.find('.modal-body #projectc_id').val(projectc_id);
    });
    //===================End Project Category Confirm Delete=================================
    //=================== Project Confirm Delete=============================================
    $('#projectConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let project_id = button.data('projectid');
        let modal = $(this);
        modal.find('.modal-body #project_id').val(project_id);
    });
    //===================End Project Confirm Delete==========================================
    //=================== Testimonials Confirm Delete========================================
    $('#testimonialConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let testimonial_id = button.data('testimonialid');
        let modal = $(this);
        modal.find('.modal-body #testimonial_id').val(testimonial_id);
    });
    //===================End Testimonials Confirm Delete=====================================
    //=================== Testimonial Banner Confirm Delete==================================
    $('#testBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let testbanner_id = button.data('testbannerid');
        let modal = $(this);
        modal.find('.modal-body #testbanner_id').val(testbanner_id);
    });
    //===================End Testimonial Banner Confirm Delete===============================
    //=================== News Category Confirm Delete=======================================
    $('#newsCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let newscat_id = button.data('newscatid');
        let modal = $(this);
        modal.find('.modal-body #newscat_id').val(newscat_id);
    });
    //===================End News Category Confirm Delete====================================
    //=================== News Media Confirm Delete==========================================
    $('#newsMediaConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let newsmedia_id = button.data('newsmediaid');
        let modal = $(this);
        modal.find('.modal-body #newsmedia_id').val(newsmedia_id);
    });
    //===================End News Media Confirm Delete========================================
    //===================== News Post Confirm Delete==========================================
    $('#newsPostConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let newspost_id = button.data('newspostid');
        let modal = $(this);
        modal.find('.modal-body #newspost_id').val(newspost_id);
    });
    //=====================End News Post Confirm Delete========================================
    //===================== News Banner Confirm Delete=========================================
    $('#newsBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let newsban_id = button.data('newsbanid');
        let modal = $(this);
        modal.find('.modal-body #newsban_id').val(newsban_id);
    });
    //=====================End News Banner Confirm Delete=======================================
    //====================== Case Banner Confirm Delete=========================================
    $('#caseBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let caseb_id = button.data('caseb_id');
        let modal = $(this);
        modal.find('.modal-body #caseb_id').val(caseb_id);
    });
    //=====================End Case Banner Confirm Delete=======================================
    //====================== Case Category Confirm Delete=======================================
    $('#caseCatConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let casecat_id = button.data('casecatid');
        let modal = $(this);
        modal.find('.modal-body #casecat_id').val(casecat_id);
    });
    //=====================End Case CategoryConfirm Delete======================================
    //========================= Case Media Confirm Delete=======================================
    $('#caseMediaConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let cmedia_id = button.data('cmediaid');
        let modal = $(this);
        modal.find('.modal-body #cmedia_id').val(cmedia_id);
    });
    //========================End Case Media Confirm Delete======================================
    //====================== Case Study Confirm Delete===========================================
    $('#caseStudyConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let casest_id = button.data('casestid');
        let modal = $(this);
        modal.find('.modal-body #casest_id').val(casest_id);
    });
    //=====================End Case Study Confirm Delete=========================================
    //====================== Contact Banner Confirm Delete=======================================
    $('#contactBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let contactb_id = button.data('contactbid');
        let modal = $(this);
        modal.find('.modal-body #contactb_id').val(contactb_id);
    });
    //=====================End Contact Banner Confirm Delete======================================
    //====================== Contact Header Confirm Delete========================================
    $('#contactHeaderConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let contacth_id = button.data('contacthid');
        let modal = $(this);
        modal.find('.modal-body #contacth_id').val(contacth_id);
    });
    //=====================End Contact Header Confirm Delete=======================================
    //====================== Contact Request Confirm Delete========================================
    $('#contactRequestConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let contactr_id = button.data('contactrid');
        let modal = $(this);
        modal.find('.modal-body #contactr_id').val(contactr_id);
    });
    //=====================End Contact Request Confirm Delete=======================================
    //====================== Contact Details Confirm Delete========================================
    $('#contactConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let contactd_id = button.data('contactdid');
        let modal = $(this);
        modal.find('.modal-body #contactd_id').val(contactd_id);
    });
    //=====================End Contact Details Confirm Delete=======================================
    //====================== Contact Map Confirm Delete=============================================
    $('#contactMapConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let contactmap_id = button.data('contactmapid');
        let modal = $(this);
        modal.find('.modal-body #contactmap_id').val(contactmap_id);
    });
    //=====================End Contact Map Confirm Delete============================================
    //====================== Footer Title Confirm Delete=============================================
    $('#footerTitleConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let footert_id = button.data('footertid');
        let modal = $(this);
        modal.find('.modal-body #footert_id').val(footert_id);
    });
    //=====================End Footer Title Confirm Delete============================================
    //====================== Footer Logo Confirm Delete=============================================
    $('#footerLogoConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let footerl_id = button.data('footerlid');
        let modal = $(this);
        modal.find('.modal-body #footerl_id').val(footerl_id);
    });
    //=====================End Footer Logo Confirm Delete============================================
    //====================== Footer Social Confirm Delete=============================================
    $('#footerSocialConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let footersoc_id = button.data('footersocid');
        let modal = $(this);
        modal.find('.modal-body #footersoc_id').val(footersoc_id);
    });
    //=====================End Footer Social Confirm Delete============================================
    //====================== Career Banner Confirm Delete=============================================
    $('#careerBannerConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let careerban_id = button.data('careerbanid');
        let modal = $(this);
        modal.find('.modal-body #careerban_id').val(careerban_id);
    });
    //=====================End Career Banner Confirm Delete============================================
    //====================== Nav Logo Confirm Delete=============================================
    $('#navLogoConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let navlogo_id = button.data('navlogoid');
        let modal = $(this);
        modal.find('.modal-body #navlogo_id').val(navlogo_id);
    });
    //=====================End Nav Logo Confirm Delete============================================
    //====================== Nav Menu Confirm Delete=============================================
    $('#navMenuConfirmDelete').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let navmenu_id = button.data('navmenuid');
        let modal = $(this);
        modal.find('.modal-body #navmenu_id').val(navmenu_id);
    });
    //=====================End Nav Menu Confirm Delete============================================

</script>
