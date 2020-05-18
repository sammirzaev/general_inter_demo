<?php

namespace App\Http\Controllers;

use App\TestimonialBanner;
use App\User;
use Illuminate\Http\Request;

class TestimonialBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $testimonial_banners = TestimonialBanner::all();
        return view('admin.testimonial-banner.testimonial_banner', compact('users', 'testimonial_banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial_banner = new TestimonialBanner;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $testimonial_banner->setTranslation('title', 'en', $request->title);
        $testimonial_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $testimonial_banner->banner = $name;
        } else {
            $testimonial_banner->banner = null;
        }
        $testimonial_banner->is_publish = $request->is_publish;
        $testimonial_banner->save();
        return redirect('admin/testimonial-banner')->with('success', 'Testimonial Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestimonialBanner  $testimonialBanner
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialBanner $testimonialBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestimonialBanner  $testimonialBanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $testimonial_banner = TestimonialBanner::findOrFail($id);
        return view('admin.testimonial-banner.edit', compact('users', 'testimonial_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestimonialBanner  $testimonialBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $testimonial_banner = TestimonialBanner::findOrFail($id);
        $testimonial_banner->setTranslation('title', 'en', $request->title);
        $testimonial_banner->setTranslation('title', 'ar', $request->title_ar);
        $testimonial_banner->is_publish = $request->is_publish;
        $testimonial_banner->update($input);
        return redirect('admin/testimonial-banner')->with('info', 'Testimonial Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestimonialBanner  $testimonialBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $testimonial_banner = TestimonialBanner::findOrFail($request->testbanner_id);
        if(!empty($testimonial_banner->banner)) {
            if (file_exists(public_path('banner-media/'. $testimonial_banner->banner))) {
                unlink(public_path('banner-media/'. $testimonial_banner->banner));
            }
        }
        $testimonial_banner->delete();
        return redirect('admin/testimonial-banner')->with('warning', 'Testimonial Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $testimonial_banner = TestimonialBanner::findOrFail($request->testbanner_id);
            if(!empty($testimonial_banner->banner)) {
                if (file_exists(public_path('banner-media/'. $testimonial_banner->banner))) {
                    unlink(public_path('banner-media/'. $testimonial_banner->banner));
                }
            }
            $testimonial_banner->delete();
            return redirect('admin/testimonial-banner')->with('warning', 'Testimonial Banner has been deleted successfully');
        }

        $testimonial_banners = TestimonialBanner::findOrFail($request->checkBoxArray);
        foreach ($testimonial_banners as $testimonial_banner){
            if(!empty($testimonial_banner->banner)) {
                if (file_exists(public_path('banner-media/'. $testimonial_banner->banner))) {
                    unlink(public_path('banner-media/'. $testimonial_banner->banner));
                }
            }
            $testimonial_banner->delete();
        }
        return redirect('admin/testimonial-banner')->with('warning', 'Testimonial Banner has been bulk deleted successfully');
    }
}
