<?php

namespace App\Http\Controllers;

use App\AboutBanner;
use App\AboutCompany;
use App\AboutConcept;
use App\AboutDiversityIcon;
use App\AboutDiversityOne;
use App\AboutDiversityTwo;
use App\AboutLeadership;
use App\AboutLeadershipMedia;
use App\AboutPolicy;
use App\AboutStoryCat;
use App\AboutTimeline;
use App\AboutTimelineCat;
use App\AboutTitle;
use App\BannerCareer;
use App\BannerCase;
use App\BannerContact;
use App\BannerFacility;
use App\BannerFire;
use App\BannerNews;
use App\BannerSecurity;
use App\BannerWater;
use App\BCCMail;
use App\BrochureRequest;
use App\Brochures;
use App\BrochureTitle;
use App\Candidate;
use App\CareerContact;
use App\CareerTitle;
use App\CaseCategory;
use App\CaseMedia;
use App\CaseStudy;
use App\CaseTitle;
use App\CategoryFacility;
use App\CategoryFire;
use App\CategorySecurity;
use App\CategoryWater;
use App\CCMail;
use App\ConceptFacility;
use App\ConceptFire;
use App\ConceptSecurity;
use App\ConceptTitle;
use App\ConceptWater;
use App\ContactDetails;
use App\ContactHeader;
use App\ContactMap;
use App\ContactRequest;
use App\ContactTitle;
use App\EmailConfiguration;
use App\Events\BrochureEvent;
use App\Facebook;
use App\FacilityTitle;
use App\FilterBrochure;
use App\FireTitle;
use App\Footer;
use App\FooterLogo;
use App\FooterSocial;
use App\FooterSpace;
use App\Front;
use App\GoogleAnalytics;
use App\GoogleTagManager;
use App\GoogleVerification;
use App\HeaderSpace;
use App\HomeBanner;
use App\HomePartner;
use App\HomeService;
use App\HomeServiceCat;
use App\HomeTitle;
use App\Http\Middleware\Localization;
use App\Http\Requests\CareersRquest;
use App\JobBrand;
use App\JobCareers;
use App\JobCategory;
use App\JobLocation;
use App\JobSalary;
use App\JobType;
use App\LocationOffice;
use App\Mail\BrochureRequestEmail;
use App\Mail\Career;
use App\Mail\Contact;
use App\Mail\HRMail;
use App\Mail\SalesContact;
use App\MetaDescription;
use App\MetaKeyword;
use App\MetaSubCopy;
use App\MetaURLDistCov;
use App\NavLogo;
use App\NavMenu;
use App\NewsCategory;
use App\NewsMedia;
use App\NewsPost;
use App\NewsTitle;
use App\Notifications\BrochureNotification;
use App\OpenGraphSiteDesc;
use App\OpenGraphTitle;
use App\OpenGraphTypeUrlImg;
use App\Project;
use App\ProjectBanner;
use App\ProjectCategory;
use App\ProjectTitle;
use App\Robots;
use App\SecurityTitle;
use App\ServiceFacility;
use App\ServiceFire;
use App\ServiceSecurity;
use App\ServiceTitle;
use App\ServiceWater;
use App\Testimonial;
use App\TestimonialBanner;
use App\TwitterCard;
use App\TwitterDomainUrl;
use App\TwitterSiteImg;
use App\TwitterTitleDesc;
use App\TypeFacility;
use App\TypeFire;
use App\TypeSecurity;
use App\TypeWater;
use App\User;
use App\WaterTitle;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Providers\MailConfigServiceProvider;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Validator;
use JoeDixon\Translation\Translation;
use phpDocumentor\Reflection\Types\Compound;
use Symfony\Component\Console\Input\Input;


class FrontController extends Controller
{
    use Notifiable;
     public function home(){
         return redirect(app()->getLocale().'/home');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = HomeTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $home_banners = HomeBanner::all();
        $services = HomeServiceCat::all();
        $home_services = HomeService::all();
        $home_partners = HomePartner::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        $news_posts = NewsPost::orderBy('created_at', 'DESC')->take(1)->get();
        return view('front.home.index', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'home_banners',
            'services',
            'home_services',
            'home_partners',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus',
            'news_posts',
        ));
    }

    public function about(){
        $title = AboutTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $about_banners = AboutBanner::all();
        $about_concepts = AboutConcept::all();
        $about_story_cats = AboutStoryCat::all();
        $about_companies = AboutCompany::all();
        $about_diversity_ones = AboutDiversityOne::all();
        $about_diversity_icons = AboutDiversityIcon::all();
        $about_diversity_twos = AboutDiversityTwo::all();
        $about_leaderships = AboutLeadership::all();
        $about_leadership_medias = AboutLeadershipMedia::all();
        $about_timeline_cats = AboutTimelineCat::all();
        $about_timelines = AboutTimeline::all();
        $about_policies = AboutPolicy::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        return view('front.about.about', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'about_concepts',
            'about_banners',
            'about_story_cats',
            'about_companies',
            'about_diversity_ones',
            'about_diversity_icons',
            'about_diversity_twos',
            'about_leaderships',
            'about_leadership_medias',
            'about_timeline_cats',
            'about_timelines',
            'about_policies',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus'
        ));
    }

    public function fireSafety()
    {
        $title = FireTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $brochures = Brochures::all();
        $filter_brochures = FilterBrochure::all();
        $brochure_request = Brochures::all();
        $fire_types = TypeFire::all();
        $fire_categories = CategoryFire::all();
        $fire_services = ServiceFire::all();
        $fire_banners = BannerFire::all();
        $concept_titles = ConceptTitle::all();
        $fire_concepts = ConceptFire::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        return view('front.services.fire-safety', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'brochure_request',
            'filter_brochures',
            'brochures',
            'fire_types',
            'fire_categories',
            'fire_services',
            'fire_banners',
            'fire_concepts',
            'concept_titles',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus'
        ));
    }

    public function securityElv()
    {
        $title = SecurityTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $security_types = TypeSecurity::all();
        $security_categories = CategorySecurity::all();
        $security_services = ServiceSecurity::all();
        $brochures = Brochures::all();
        $filter_brochures = FilterBrochure::all();
        $brochure_request = Brochures::all();
        $security_banners = BannerSecurity::all();
        $security_concepts = ConceptSecurity::all();
        $concept_titles = ConceptTitle::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        return view('front.services.security-elv', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'security_types',
            'security_categories',
            'security_services',
            'brochures',
            'brochure_request',
            'filter_brochures',
            'security_banners',
            'security_concepts',
            'concept_titles',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus'
        ));
    }

    public function waterTreat()
    {
        $title = WaterTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $brochures = Brochures::all();
        $filter_brochures = FilterBrochure::all();
        $brochure_request = Brochures::all();
        $water_types = TypeWater::all();
        $water_categories = CategoryWater::all();
        $water_services = ServiceWater::all();
        $water_banners = BannerWater::all();
        $water_concepts = ConceptWater::all();
        $concept_titles = ConceptTitle::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        return view('front.services.water-treat', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'brochure_request',
            'brochures',
            'filter_brochures',
            'water_types',
            'water_categories',
            'water_services',
            'water_banners',
            'water_concepts',
            'concept_titles',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus'
        ));
    }

    public function facilityManage()
    {
        $title = FacilityTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $brochures = Brochures::all();
        $filter_brochures = FilterBrochure::all();
        $brochure_request = Brochures::all();
        $facility_types = TypeFacility::all();
        $facility_categories = CategoryFacility::all();
        $facility_services = ServiceFacility::all();
        $facility_banners = BannerFacility::all();
        $facility_concepts = ConceptFacility::all();
        $concept_titles = ConceptTitle::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        return view('front.services.facility-manage', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'brochures',
            'brochure_request',
            'filter_brochures',
            'facility_types',
            'facility_categories',
            'facility_services',
            'facility_banners',
            'facility_concepts',
            'concept_titles',
            'footer_titles',
            'footer_socials',
            'footer_logos',
            'nav_logos',
            'nav_menus'
        ));
    }

    public function newsEvents(Request $request)
    {
        $search = $request->get('search');
        $title = NewsTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $news_banners = BannerNews::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        $news_posts = NewsPost::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->paginate(30);
        return view('front.insights.news-events', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'news_posts',
            'news_banners',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus'
        ));
    }
    public function newsSingle($locale, $id)
    {
        $title = NewsTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $news_post = NewsPost::findBySlugOrFail($id);
        $news_medias = NewsMedia::all();
        $news_cats = NewsCategory::all();
        $news_banners = BannerNews::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        return view('front.insights.news-single', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'news_post',
            'news_medias',
            'news_cats',
            'news_banners',
            'footer_titles',
            'footer_socials',
            'footer_logos',
            'nav_logos',
            'nav_menus',
            'locale'
        ));
    }

    public function caseStudies()
    {
        $title = CaseTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $case_banners = BannerCase::all();
        $case_cats = CaseCategory::all();
        $case_medias = CaseMedia::all();
        $case_studies = CaseStudy::all();
        $case_study = CaseStudy::pluck('title', 'id')->all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        return view('front.insights.case-studies', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'case_banners',
            'case_cats',
            'case_medias',
            'case_studies',
            'case_study',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus'
        ));
    }

    public function searchPage($locale, Request $request)
    {
        $title = HomeTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $about_banners = AboutBanner::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        $search = $request->get('search');
        $news_posts = NewsPost::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->get();
        $post_result = NewsPost::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->count();
        $post_results = ServiceFire::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->count();
        $service_fires = ServiceFire::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->get();
        $security_result = ServiceSecurity::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->count();
        $service_securities = ServiceSecurity::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->get();
        $water_result = ServiceWater::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->count();
        $service_waters = ServiceWater::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->get();
        $facility_result = ServiceFacility::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->count();
        $service_facilities = ServiceFacility::where('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->get();
       return view('front.search', compact(
           'title',
           'meta_desc',
           'meta_key',
           'sub_copy',
           'url_dist_cov',
           'og_title',
           'og_type_url_img',
           'og_site_desc',
           'analytics',
           'google_verify',
           'tag_managers',
           'header_space',
           'footer_spaces',
           'facebooks',
           'robots',
           'twitter_card',
           'twitter_doms',
           'twitter_site',
           'twitter_title',
           'about_banners',
           'footer_titles',
           'footer_logos',
           'footer_socials',
           'nav_logos',
           'nav_menus',
           'news_posts',
           'locale',
           'service_fires',
           'service_securities',
           'service_waters',
           'service_facilities',
           'post_result',
           'post_results',
           'security_result',
           'water_result',
           'facility_result'
       ));
    }

    public function project(){
        $title = ProjectTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $projects = Project::all();
        $project_banners = ProjectBanner::all();
        $project_cats = ProjectCategory::all();
        $testimonial_banners = TestimonialBanner::all();
        $testimonials = Testimonial::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        return view('front.projects.project', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'projects',
            'project_banners',
            'project_cats',
            'testimonial_banners',
            'testimonials',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus'
        ));
    }

    public function careers(Request $request){
        $title = CareerTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $type = JobType::pluck('name', 'id')->all();
        $location = JobLocation::pluck('name', 'id')->all();
        $salary = JobSalary::pluck('name', 'id')->all();
        $categories = JobCategory::pluck('name', 'id')->all();
        $search = $request->get('search');
        $careers = JobCareers::pluck('job_name', 'id')->all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $career_banners = BannerCareer::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        $careers_contact = JobCareers::where('job_name', 'like', '%'.$search.'%')->
        orWhere('job_title', 'like', '%'.$search.'%')->
        orWhere('job_desc', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->paginate(30);
        return view('front.careers.career', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'careers_contact',
            'categories',
            'salary',
            'location',
            'type',
            'careers',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'career_banners',
            'nav_logos',
            'nav_menus'
        ));
    }

    public function contact(){
        $title = ContactTitle::all();
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $contact_banners = BannerContact::all();
        $contact_headers = ContactHeader::all();
        $contact_requests = ContactRequest::all();
        $contacts = ContactDetails::all();
        $contact_maps = ContactMap::all();
        $footer_titles = Footer::all();
        $footer_logos = FooterLogo::all();
        $footer_socials = FooterSocial::all();
        $nav_logos = NavLogo::all();
        $nav_menus = NavMenu::all();
        $locations = LocationOffice::all();
        return view('front.contact.contact', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'contact_banners',
            'contact_headers',
            'contact_requests',
            'contacts',
            'contact_maps',
            'footer_titles',
            'footer_logos',
            'footer_socials',
            'nav_logos',
            'nav_menus',
            'locations'
        ));
    }

    public function contactEmail(Request $request)
    {
//=====================contact email sender methods=======================
        $cc_email = CCMail::pluck('mail')->toArray();
        $bcc_email = BCCMail::pluck('mail')->toArray();
        $contact_email = EmailConfiguration::all()->first();
        $email["cc"] = $cc_email;
        $email["bcc"] = $bcc_email;
        $email["from"] = $request->email;
        $email["to"] = $contact_email->contact_email;
        $email["subject"] = 'GIG NEW INQUIRY REQUEST';
        $data = array(
            'location'=>$request->location,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        );
        //===================Will send contact company email=====================
        Mail::to($email["to"])->send(new Contact($data));
//        Mail::send('mail.contact_email', $data, function ($message) use ($email){
//            if ($email["cc"] == '' && $email["bcc"] == '')
//            {
//                $message->subject($email["subject"])
//                    ->to($email["to"]);
//            } elseif ($email["cc"] == '') {
//                $message->subject($email["subject"])
//                    ->from($email["from"])
//                    ->to($email["to"])
//                    ->bcc($email["bcc"]);
//            } elseif ($email["bcc"] == '') {
//                $message->subject($email["subject"])
//                    ->to($email["to"])
//                    ->cc($email["cc"]);
//            } else {
//                $message->subject($email["subject"])
//                    ->to($email["to"])
//                    ->cc($email["cc"])
//                    ->bcc($email["bcc"]);
//            }
//
//        });
        //===================end Will send contact company email=====================
        //=====================end contact email sender methods=======================
        return redirect()->back()->with('success', 'Your Email Has Been Sent Successfully!');
    }

    public function salesEmail(Request $request)
    {
//=====================contact email sender methods=======================
        $cc_email = CCMail::pluck('mail')->toArray();
        $bcc_email = BCCMail::pluck('mail')->toArray();
        $contact_email = EmailConfiguration::all()->first();
        $email["cc"] = $cc_email;
        $email["bcc"] = $bcc_email;
        $email["from"] = $request->email;
        $email["to"] = $contact_email->contact_email;
        $email["subject"] = 'GIG NEW SALES REQUEST';
        $data = array(
            'location'=>$request->location,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        );
        //===================Will send contact company email=====================
        Mail::to($email["to"])->send(new SalesContact($data));
//        Mail::send('mail.contact_email', $data, function ($message) use ($email){
//            if ($email["cc"] == '' && $email["bcc"] == '')
//            {
//                $message->subject($email["subject"])
//                    ->to($email["to"]);
//            } elseif ($email["cc"] == '') {
//                $message->subject($email["subject"])
//                    ->from($email["from"])
//                    ->to($email["to"])
//                    ->bcc($email["bcc"]);
//            } elseif ($email["bcc"] == '') {
//                $message->subject($email["subject"])
//                    ->to($email["to"])
//                    ->cc($email["cc"]);
//            } else {
//                $message->subject($email["subject"])
//                    ->to($email["to"])
//                    ->cc($email["cc"])
//                    ->bcc($email["bcc"]);
//            }
//
//        });
        //===================end Will send contact company email=====================
        //=====================end contact email sender methods=======================
        return redirect()->back()->with('success', 'Your Email Has Been Sent Successfully!');
    }

    public function careersContact(Request $request, $id){
        $title = 'Apply Job | General International Group';
        $meta_key = MetaKeyword::all();
        $meta_desc = MetaDescription::all();
        $sub_copy = MetaSubCopy::all();
        $url_dist_cov = MetaURLDistCov::all();
        $og_title = OpenGraphTitle::all();
        $og_type_url_img = OpenGraphTypeUrlImg::all();
        $og_site_desc = OpenGraphSiteDesc::all();
        $analytics = GoogleAnalytics::all();
        $google_verify = GoogleVerification::all();
        $tag_managers = GoogleTagManager::all();
        $header_space = HeaderSpace::all();
        $footer_spaces = FooterSpace::all();
        $facebooks = Facebook::all();
        $robots = Robots::all();
        $twitter_card = TwitterCard::all();
        $twitter_doms = TwitterDomainUrl::all();
        $twitter_site = TwitterSiteImg::all();
        $twitter_title = TwitterTitleDesc::all();
        $careers = JobCareers::findOrFail($id);
        return view('front.careers.careers-contact', compact(
            'title',
            'meta_key',
            'meta_desc',
            'sub_copy',
            'url_dist_cov',
            'og_title',
            'og_type_url_img',
            'og_site_desc',
            'analytics',
            'google_verify',
            'tag_managers',
            'header_space',
            'footer_spaces',
            'facebooks',
            'robots',
            'twitter_card',
            'twitter_doms',
            'twitter_site',
            'twitter_title',
            'careers'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function brochureRequest(Request $request, $pusher)
    {
        $brochure = new BrochureRequest();
        $brochure->brochure_id = $request->brochure_id;
        $brochure->requester_name = $request->requester_name;
        $brochure->requester_email = $request->requester_email;
        $brochure->requester_phone = $request->requester_phone;
        //If User will request from brochure page brochure it will send email to User for Notification,==========
        // if there is BCC, CC OR NOT BCC and CC available it will send email TO User Email send email ======
        // and it will save in database as well==========
        if($brochure->save()){
            //=========it will get the data from database
            $cc_email = CCMail::pluck('mail')->toArray();
            $bcc_email = BCCMail::pluck('mail')->toArray();
            $email["cc"] = $cc_email;
            $email["bcc"] = $bcc_email;
            $email["to"] = $request->requester_email;
            $email["subject"] = 'General International Group Brochure Request';
            $data = [
                'brochure_names'=> $request->brochure_id,
                'name'=> $request->requester_name,
                'email'=> $request->requester_email,
                'phone'=> $request->requester_phone,
            ];
            //==============Then Admin Mail will start from here ===============================
            Mail::send('mail.brochures_mail', $data, function ($message) use ($email){
                if ($email["cc"] == '' && $email["bcc"] == '')
                {
                    $message->subject($email["subject"])
                        ->to($email["to"]);
                } elseif ($email["cc"] == '') {
                    $message->subject($email["subject"])
                        ->to($email["to"])
                        ->bcc($email["bcc"]);
                } elseif ($email["bcc"] == '') {
                    $message->subject($email["subject"])
                        ->to($email["to"])
                        ->cc($email["cc"]);
                } else {
                    $message->subject($email["subject"])
                        ->to($email["to"])
                        ->cc($email["cc"])
                        ->bcc($email["bcc"]);
                }

            });
            //==============End Admin Mail Method ===============================
        }
        $user = User::all();
        \Notification::send($user, new BrochureNotification($brochure));
         //=============================Brochures Email Method ENDs here ==============================
        //=============================Redirect back to page with Successful Message ==============================
        return redirect()->back()->with('success', 'Your Request has been sent successfully!');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CareersRquest $request)
    {
//===================uploaded file will move to in folder then send to database==================
        $input = $request->all();
        if($file = $request->file('file')){
            $name = $request->name.' - ' .$request->phone.' - '. $file->getClientOriginalName();
            $file->move('resume', $name);
            $input['file'] = $name;
        }
//==================end file upload============================
//=============application career request will save in database==========
        $candidate = new Candidate();
        $candidate->job_id = $request->job_id;
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->phone = $request->phone;
        $candidate->subject = $request->subject;
        $candidate->letter = $request->letter;
        $candidate->file = $name;
        $job_user = JobCareers::all()->first();
        if($candidate->save()){
            $data = array(
                'position'=>$request->get('job_id'),
                'name'=> $request->name,
                'subject'=> $request->subject,
                'title'=> $job_user->job_title,
                'description'=> $job_user->job_desc,
                'letter'=> $request->letter,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'file'=> $name,
            );
            $cc_email = CCMail::pluck('mail')->toArray();
            $bcc_email = BCCMail::pluck('mail')->toArray();
            $contact_email = EmailConfiguration::all()->first();
            $data["cc"] = $cc_email;
            $data["bcc"] = $bcc_email;
            $data["from"] = $contact_email->career_email;
            $data["to"] = $contact_email->hr_email;
            $data["subject"] = 'GIG Candidate Application';
//====================end application career saving data and getting data from user=======
//===================HR and CC or BCC will recieve email with attachment ========
            Mail::send('mail.careers_user', $data, function($message) use ($data){
                if ($data["cc"] == '' && $data["bcc"] == ''){
                    $message->from($data["from"]);
                    $message->to($data["to"]);
                    $message->subject($data["subject"]);
                    $message->attach(public_path('resume/'.$data['file']), array(
                        'as'    => $data['file'],
                        'mime'  => $data['file']
                    ));
                } elseif ($data["cc"] == '') {
                    $message->from($data["from"]);
                    $message->to($data["to"]);
                    $message->subject($data["subject"]);
                    $message->attach(public_path('resume/'.$data['file']), array(
                        'as'    => $data['file'],
                        'mime'  => $data['file']
                    ));
                    $message->bcc($data["bcc"]);
                } elseif ($data["bcc"] == '') {
                    $message->from($data["from"]);
                    $message->to($data["to"]);
                    $message->subject($data["subject"]);
                    $message->attach(public_path('resume/' . $data['file']), array(
                        'as' => $data['file'],
                        'mime' => $data['file']
                    ));
                    $message->cc($data["cc"]);
                } else {
                    $message->from($data["from"]);
                    $message->to($data["to"]);
                    $message->subject($data["subject"]);
                    $message->attach(public_path('resume/' . $data['file']), array(
                        'as' => $data['file'],
                        'mime' => $data['file']
                    ));
                    $message->cc($data["cc"]);
                    $message->bcc($data["bcc"]);
                }
            });
//===================end hr and cc or bcc email with attachment sender=================
//=====================User will recieve email form below the method=====================
            Mail::to($request->email)->send(new Career($data));
        }
        return redirect()->back()->with('success', 'Thank you for applying with us!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function edit(Front $front)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Front $front)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function destroy(Front $front)
    {
        //
    }
}
