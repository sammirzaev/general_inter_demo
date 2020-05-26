<?php

use App\Http\Middleware\Localization;
use App\NewsPost;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Route::get('/', function () {
    return redirect(app()->getLocale().'/home');
});

//Route::redirect('/', app()->getLocale().'/home', 301);
//Route::post('/', 'FrontController@home');
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware'=>['setLocale', 'cache']], function() {
    Route::get('/home', 'FrontController@index')->name('home');
    Route::get('/about', 'FrontController@about')->name('about');
    Route::get('/service', 'FrontController@service')->name('service');
    Route::get('/fire-safety', 'FrontController@fireSafety')->name('fire_safety');
    Route::get('/security-elv', 'FrontController@securityElv')->name('security_elv');
    Route::get('/water-treat', 'FrontController@waterTreat')->name('water_treat');
    Route::get('/facility-manage', 'FrontController@facilityManage')->name('facility_manage');
    Route::get('/news-events', 'FrontController@newsEvents')->name('news_events');
    Route::get('/news-events/{id}', 'FrontController@newsSingle')->name('news_single');
    Route::get('/case-studies', 'FrontController@caseStudies')->name('case_studies');
    Route::any('/search-page', 'FrontController@searchPage')->name('search_page');
    Route::get('/brochures', 'FrontController@brochures')->name('brochures');
    Route::get('/project', 'FrontController@project')->name('project');
    Route::get('/brochures/brochure-contact', 'FrontController@brochuresContact')->name('brochure-contact');
    Route::post('/brochures/request', 'FrontController@brochureRequest')->name('brochureRequest');
    Route::get('/careers', 'FrontController@careers')->name('careers');
    Route::get('/careers/{career}/careers-contact/', 'FrontController@careersConatct')->name('careers-contact');
    Route::resource('/careers-contact/send', 'FrontController');
    Route::get('/contact', 'FrontController@contact')->name('contact');
    Route::post('/contact/send', 'FrontController@contactEmail');
    Route::post('/contact/sales-send', 'FrontController@salesEmail');
});

//Route::get('{locale}/news-events/{id}', 'FrontController@newsSingle')->name('news_single');



Route::group(['middleware'=>'admin'], function() {
  Route::get('/admin', 'AdminController@index')->name('admin');
  Route::resource('/admin/users', 'UserController');
  Route::resource('/admin/positions', 'PositionController');
  Route::resource('/admin/roles', 'RoleController');
  Route::get('/admin/notify/positions', 'PositionController@newPosition')->name('position-notify');
  Route::resource('/admin/avatars', 'PhotoController');
  Route::resource('/admin/profiles', 'ProfileController');
  Route::get('markAsRead', 'PositionController@markAsRead')->name('markRead');
  Route::resource('/admin/meta-keywords', 'MetaKeywordController');
  Route::resource('/admin/meta-description', 'MetaDescriptionController');
  Route::resource('/admin/meta-subject', 'MetaSubCopyController');
  Route::resource('/admin/meta-coverage', 'MetaURLDistCovController');
  Route::resource('/admin/og-title', 'OpenGraphTitleController');
  Route::resource('/admin/og-type', 'OpenGraphTypeUrlImgController');
  Route::resource('/admin/og-site', 'OpenGraphSiteDescController');
  Route::resource('/admin/analytics', 'GoogleAnalyticsController');
  Route::resource('/admin/verification', 'GoogleVerificationController');
  Route::resource('/admin/tag-manager', 'GoogleTagManagerController');
  Route::resource('/admin/header-space', 'HeaderSpaceController');
  Route::resource('/admin/footer-space', 'FooterSpaceController');
  Route::resource('/admin/facebook', 'FacebookController');
  Route::resource('/admin/robots', 'RobotsController');
  Route::resource('/admin/twitter-domain', 'TwitterDomainUrlController');
  Route::resource('/admin/twitter-card', 'TwitterCardController');
  Route::resource('/admin/twitter-site', 'TwitterSiteImgController');
  Route::resource('/admin/twitter-title', 'TwitterTitleDescController');
  Route::resource('/admin/job-board', 'JobCareersController');
  Route::resource('/admin/brand-media', 'BrandPhotoController');
  Route::resource('/admin/job-category', 'JobCategoryController');
  Route::resource('/admin/job-location', 'JobLocationController');
  Route::resource('/admin/job-type', 'JobTypeController');
  Route::resource('/admin/job-salary', 'JobSalaryController');
  Route::resource('/admin/career-contact', 'CareerContactController');
  Route::resource('/admin/candidate', 'CandidateController');
  Route::resource('/admin/brochures', 'BrochuresController');
  Route::resource('/admin/brochure-requests', 'BrochureRequestController');
  Route::delete('/admin/delete/brochure-requests', 'BrochureRequestController@deleteAll');
  Route::resource('/admin/brochure-filter', 'FilterBrochureController');
  Route::delete('/admin/delete/brochure-filter', 'FilterBrochureController@deleteAll');
  Route::delete('/admin/delete/brochures', 'BrochuresController@deleteAll');
  Route::delete('/admin/delete/candidate/', 'CandidateController@deleteAll');
  Route::get('/admin/download/{candidate}', 'CandidateController@download')->name('download');
  Route::resource('/admin/email-configuration', 'EmailConfigurationController');
  Route::resource('/admin/cc-configuration', 'CCMailController');
  Route::resource('/admin/bcc-configuration', 'BCCMailController');
  Route::resource('/admin/home-title', 'HomeTitleController');
  Route::resource('/admin/about-title', 'AboutTitleController');
  Route::resource('/admin/project-title', 'ProjectTitleController');
  Route::resource('/admin/career-title', 'CareerTitleController');
  Route::resource('/admin/contact-title', 'ContactTitleController');
  Route::resource('/admin/fire-title', 'FireTitleController');
  Route::resource('/admin/security-title', 'SecurityTitleController');
  Route::resource('/admin/water-title', 'WaterTitleController');
  Route::resource('/admin/facility-title', 'FacilityTitleController');
  Route::resource('/admin/news-title', 'NewsTitleController');
  Route::resource('/admin/case-title', 'CaseTitleController');
  Route::resource('/admin/home-banner', 'HomeBannerController');
  Route::delete('/admin/delete/home-banner', 'HomeBannerController@deleteAll');
  Route::resource('/admin/home-service-cat', 'HomeServiceCatController');
  Route::delete('/admin/delete/home-service-cat', 'HomeServiceCatController@deleteAll');
  Route::resource('/admin/home-service', 'HomeServiceController');
  Route::delete('/admin/delete/home-service', 'HomeServiceController@deleteAll');
  Route::resource('/admin/home-partner', 'HomePartnerController');
  Route::delete('/admin/delete/home-partner', 'HomePartnerController@deleteAll');
  Route::resource('/admin/about-banner', 'AboutBannerController');
  Route::delete('/admin/delete/about-banner', 'AboutBannerController@deleteAll');
  Route::resource('/admin/about-concept', 'AboutConceptController');
  Route::delete('/admin/delete/about-concept', 'AboutConceptController@deleteAll');
  Route::resource('/admin/about-story-cat', 'AboutStoryCatController');
  Route::delete('/admin/delete/about-story-cat', 'AboutStoryCatController@deleteAll');
  Route::resource('/admin/about-company', 'AboutCompanyController');
  Route::delete('/admin/delete/about-company', 'AboutCompanyController@deleteAll');
  Route::resource('/admin/about-diversity-one', 'AboutDiversityOneController');
  Route::delete('/admin/delete/about-diversity-one', 'AboutDiversityOneController@deleteAll');
  Route::resource('/admin/about-diversity-icon', 'AboutDiversityIconController');
  Route::delete('/admin/delete/about-diversity-icon', 'AboutDiversityIconController@deleteAll');
  Route::resource('/admin/about-diversity-two', 'AboutDiversityTwoController');
  Route::delete('/admin/delete/about-diversity-two', 'AboutDiversityTwoController@deleteAll');
  Route::resource('/admin/about-leadership-media', 'AboutLeadershipMediaController');
  Route::delete('/admin/delete/about-leadership-media', 'AboutLeadershipMediaController@deleteAll');
  Route::resource('/admin/about-leadership', 'AboutLeadershipController');
  Route::delete('/admin/delete/about-leadership', 'AboutLeadershipController@deleteAll');
  Route::resource('/admin/about-timeline', 'AboutTimelineController');
  Route::delete('/admin/delete/about-timeline', 'AboutTimelineController@deleteAll');
  Route::resource('/admin/about-timeline-cat', 'AboutTimelineCatController');
  Route::delete('/admin/delete/about-timeline-cat', 'AboutTimelineCatController@deleteAll');
  Route::resource('/admin/about-policy', 'AboutPolicyController');
  Route::delete('/admin/delete/about-policy', 'AboutPolicyController@deleteAll');
  Route::resource('/admin/fire-type', 'TypeFireController');
  Route::delete('/admin/delete/fire-type', 'TypeFireController@deleteAll');
  Route::resource('/admin/security-type', 'TypeSecurityController');
  Route::delete('/admin/delete/security-type', 'TypeSecurityController@deleteAll');
  Route::resource('/admin/water-type', 'TypeWaterController');
  Route::delete('/admin/delete/water-type', 'TypeWaterController@deleteAll');
  Route::resource('/admin/facility-type', 'TypeFacilityController');
  Route::delete('/admin/delete/facility-type', 'TypeFacilityController@deleteAll');
  Route::resource('/admin/fire-category', 'CategoryFireController');
  Route::delete('/admin/delete/fire-category', 'CategoryFireController@deleteAll');
  Route::resource('/admin/water-category', 'CategoryWaterController');
  Route::delete('/admin/delete/water-category', 'CategoryWaterController@deleteAll');
  Route::resource('/admin/security-category', 'CategorySecurityController');
  Route::delete('/admin/delete/security-category', 'CategorySecurityController@deleteAll');
  Route::resource('/admin/facility-category', 'CategoryFacilityController');
  Route::delete('/admin/delete/facility-category', 'CategoryFacilityController@deleteAll');
  Route::resource('/admin/fire-banner', 'BannerFireController');
  Route::delete('/admin/delete/fire-banner', 'BannerFireController@deleteAll');
  Route::resource('/admin/security-banner', 'BannerSecurityController');
  Route::delete('/admin/delete/security-banner', 'BannerSecurityController@deleteAll');
  Route::resource('/admin/water-banner', 'BannerWaterController');
  Route::delete('/admin/delete/water-banner', 'BannerWaterController@deleteAll');
  Route::resource('/admin/facility-banner', 'BannerFacilityController');
  Route::delete('/admin/delete/facility-banner', 'BannerFacilityController@deleteAll');
  Route::resource('/admin/fire-concept', 'ConceptFireController');
  Route::delete('/admin/delete/fire-concept', 'ConceptFireController@deleteAll');
  Route::resource('/admin/security-concept', 'ConceptSecurityController');
  Route::delete('/admin/delete/security-concept', 'ConceptSecurityController@deleteAll');
  Route::resource('/admin/water-concept', 'ConceptWaterController');
  Route::delete('/admin/delete/water-concept', 'ConceptWaterController@deleteAll');
  Route::resource('/admin/facility-concept', 'ConceptFacilityController');
  Route::delete('/admin/delete/facility-concept', 'ConceptFacilityController@deleteAll');
  Route::resource('/admin/concept-title', 'ConceptTitleController');
  Route::resource('/admin/fire-service', 'ServiceFireController');
  Route::delete('/admin/delete/fire-service', 'ServiceFireController@deleteAll');
  Route::resource('/admin/security-service', 'ServiceSecurityController');
  Route::delete('/admin/delete/security-service', 'ServiceSecurityController@deleteAll');
  Route::resource('/admin/water-service', 'ServiceWaterController');
  Route::delete('/admin/delete/water-service', 'ServiceWaterController@deleteAll');
  Route::resource('/admin/facility-service', 'ServiceFacilityController');
  Route::delete('/admin/delete/facility-service', 'ServiceFacilityController@deleteAll');
  Route::resource('/admin/project-banner', 'ProjectBannerController');
  Route::delete('/admin/delete/project-banner', 'ProjectBannerController@deleteAll');
  Route::resource('/admin/project-category', 'ProjectCategoryController');
  Route::delete('/admin/delete/project-category', 'ProjectCategoryController@deleteAll');
  Route::resource('/admin/project', 'ProjectController');
  Route::delete('/admin/delete/project', 'ProjectController@deleteAll');
  Route::resource('/admin/testimonial-banner', 'TestimonialBannerController');
  Route::delete('/admin/delete/testimonial-banner', 'TestimonialBannerController@deleteAll');
  Route::resource('/admin/testimonial', 'TestimonialController');
  Route::delete('/admin/delete/testimonial', 'TestimonialController@deleteAll');
  Route::resource('/admin/news-category', 'NewsCategoryController');
  Route::delete('/admin/delete/news-category', 'NewsCategoryController@deleteAll');
  Route::resource('/admin/news-media', 'NewsMediaController');
  Route::delete('/admin/delete/news-media', 'NewsMediaController@deleteAll');
  Route::resource('/admin/news-post', 'NewsPostController');
  Route::delete('/admin/delete/news-post', 'NewsPostController@deleteAll');
  Route::resource('/admin/news-banner', 'BannerNewsController');
  Route::delete('/admin/delete/news-banner', 'BannerNewsController@deleteAll');
  Route::resource('/admin/case-banner', 'BannerCaseController');
  Route::delete('/admin/delete/case-banner', 'BannerCaseController@deleteAll');
  Route::resource('/admin/case-category', 'CaseCategoryController');
  Route::delete('/admin/delete/case-category', 'CaseCategoryController@deleteAll');
  Route::resource('/admin/case-media', 'CaseMediaController');
  Route::delete('/admin/delete/case-media', 'CaseMediaController@deleteAll');
  Route::resource('/admin/case-study', 'CaseStudyController');
  Route::delete('/admin/delete/case-study', 'CaseStudyController@deleteAll');
  Route::resource('/admin/contact-banner', 'BannerContactController');
  Route::delete('/admin/delete/contact-banner', 'BannerContactController@deleteAll');
  Route::resource('/admin/contact-header', 'ContactHeaderController');
  Route::delete('/admin/delete/contact-header', 'ContactHeaderController@deleteAll');
  Route::resource('/admin/contact-request', 'ContactRequestController');
  Route::delete('/admin/delete/contact-request', 'ContactRequestController@deleteAll');
  Route::resource('/admin/contact-details', 'ContactDetailsController');
  Route::delete('/admin/delete/contact-details', 'ContactDetailsController@deleteAll');
  Route::resource('/admin/contact-map', 'ContactMapController');
  Route::delete('/admin/delete/contact-map', 'ContactMapController@deleteAll');
  Route::resource('/admin/footer-title', 'FooterController');
  Route::delete('/admin/delete/footer-title', 'FooterController@deleteAll');
  Route::resource('/admin/footer-logo', 'FooterLogoController');
  Route::delete('/admin/delete/footer-logo', 'FooterLogoController@deleteAll');
  Route::resource('/admin/footer-social', 'FooterSocialController');
  Route::delete('/admin/delete/footer-social', 'FooterSocialController@deleteAll');
  Route::resource('/admin/career-banner', 'BannerCareerController');
  Route::delete('/admin/delete/career-banner', 'BannerCareerController@deleteAll');
  Route::resource('/admin/nav-logo', 'NavLogoController');
  Route::delete('/admin/delete/nav-logo', 'NavLogoController@deleteAll');
  Route::resource('/admin/nav-menu', 'NavMenuController');
  Route::delete('/admin/delete/nav-menu', 'NavMenuController@deleteAll');
  Route::resource('/admin/location-office', 'LocationOfficeController');
  Route::delete('/admin/delete/location-office', 'LocationOfficeController@deleteAll');
  Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
