<?php

namespace App\Http\Controllers;

use App\BCCMail;
use App\BrochureRequest;
use App\Brochures;
use App\Candidate;
use App\CareerContact;
use App\CCMail;
use App\EmailConfiguration;
use App\Facebook;
use App\FilterBrochure;
use App\FooterSpace;
use App\Front;
use App\GoogleAnalytics;
use App\GoogleTagManager;
use App\GoogleVerification;
use App\HeaderSpace;
use App\Http\Middleware\Localization;
use App\Http\Requests\CareersRquest;
use App\JobBrand;
use App\JobCareers;
use App\JobCategory;
use App\JobLocation;
use App\JobSalary;
use App\JobType;
use App\Mail\BrochureRequestEmail;
use App\Mail\Career;
use App\Mail\Contact;
use App\Mail\HRMail;
use App\MetaDescription;
use App\MetaKeyword;
use App\MetaSubCopy;
use App\MetaURLDistCov;
use App\OpenGraphSiteDesc;
use App\OpenGraphTitle;
use App\OpenGraphTypeUrlImg;
use App\Robots;
use App\TwitterCard;
use App\TwitterDomainUrl;
use App\TwitterSiteImg;
use App\TwitterTitleDesc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Providers\MailConfigServiceProvider;
use Illuminate\Validation\Validator;
use JoeDixon\Translation\Translation;
use function foo\func;


class FrontController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'General International Group';
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
            'twitter_title'
        ));
    }

    public function about(){
        $title = 'About Us | General International Group';
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
            'twitter_title'
        ));
    }

    public function service(){
        $title = 'Services | General International Group';
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
        return view('front.services.service', compact(
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
            'twitter_title'
        ));
    }

    public function project(){
        $title = 'Projects | General International Group';
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
            'twitter_title'
        ));
    }

    public function careers(Request $request){
        $title = 'Careers | General International Group';
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
        $brand = JobBrand::pluck('brand_name', 'brand_id', 'id')->all();
        $salary = JobSalary::pluck('name', 'id')->all();
        $categories = JobCategory::pluck('name', 'id')->all();
        $search = $request->get('search');
        $careers = JobCareers::pluck('job_name', 'id')->all();
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
            'brand',
            'location',
            'type',
            'careers'
        ));
    }

    public function contact(){
        $title = 'Contact Us | General International Group';
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
            'twitter_title'
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

    public function brochures()
    {
        $title = 'Brochures | General International Group';
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
        $brochure_request = Brochures::pluck('brochure_name', 'id')->all();
        return view('front.brochures.brochure', compact(
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
            'filter_brochures'
        ));
    }

    public function brochuresContact(){
        $title = 'Brochure Request | General International Group';
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
        $brochure_request = Brochures::pluck('id', 'brochure_name')->all();
        $brochure = Brochures::all();
        return view('front.brochures.brochure-contact', compact(
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
            'brochure',
            'brochure_request'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function brochureRequest(Request $request)
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
    public function show(Front $front)
    {
        //
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
