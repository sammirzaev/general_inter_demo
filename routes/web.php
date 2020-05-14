<?php

use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(app()->getLocale().'/home');
});
//Route::get('/', 'FrontController@index');
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware'=>'setLocale'], function() {
    Route::get('/home', 'FrontController@index')->name('home');
    Route::get('/about', 'FrontController@about')->name('about');
    Route::get('/service', 'FrontController@service')->name('service');
    Route::get('/project', 'FrontController@project')->name('project');
    Route::get('/brochures', 'FrontController@brochures')->name('brochures');
//Route::get('/brochures/{brochures}/brochure-contact', 'FrontController@brochuresContact')->name('brochure-contact');
    Route::get('/brochures/brochure-contact', 'FrontController@brochuresContact')->name('brochure-contact');
    Route::post('/brochures/request', 'FrontController@brochureRequest')->name('brochureRequest');
    Route::get('/careers', 'FrontController@careers')->name('careers');
    Route::get('/careers/{career}/careers-contact/', 'FrontController@careersConatct')->name('careers-contact');
    Route::resource('/careers-contact/send', 'FrontController');
    Route::get('/contact', 'FrontController@contact')->name('contact');
    Route::post('/contact/send', 'FrontController@contactEmail');
});

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
  Route::resource('/admin/file', 'FileManagementController');
  Route::resource('/admin/job-board', 'JobCareersController');
  Route::resource('/admin/job-brand', 'JobBrandController');
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
  Route::resource('/admin/email-configuration', 'EmailConfigurationController');
  Route::resource('/admin/cc-configuration', 'CCMailController');
  Route::resource('/admin/bcc-configuration', 'BCCMailController');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
