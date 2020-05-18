<?php

namespace App\Http\Controllers;

use App\BannerFacility;
use App\User;
use Illuminate\Http\Request;

class BannerFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $facility_banners = BannerFacility::all();
        return view('admin.banner-facility.facility_banner', compact('users', 'facility_banners'));
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
        $facility_banner = new BannerFacility;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $facility_banner->setTranslation('head_title', 'en', $request->head_title);
        $facility_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $facility_banner->setTranslation('title', 'en', $request->title);
        $facility_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $facility_banner->banner = $name;
        }else {
            $facility_banner->banner = null;
        }
        $facility_banner->is_publish = $request->is_publish;
        $facility_banner->save();
        return redirect('admin/facility-banner')->with('success', 'Facility Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerFacility  $bannerFacility
     * @return \Illuminate\Http\Response
     */
    public function show(BannerFacility $bannerFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerFacility  $bannerFacility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $facility_banner = BannerFacility::findOrFail($id);
        return view('admin.banner-facility.edit', compact('users', 'facility_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerFacility  $bannerFacility
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
        $facility_banner = BannerFacility::findOrFail($id);
        $facility_banner->setTranslation('head_title', 'en', $request->head_title);
        $facility_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $facility_banner->setTranslation('title', 'en', $request->title);
        $facility_banner->setTranslation('title', 'ar', $request->title_ar);
        $facility_banner->is_publish = $request->is_publish;
        $facility_banner->update($input);
        return redirect('admin/facility-banner')->with('success', 'Facility Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerFacility  $bannerFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $facility_banner = BannerFacility::findOrFail($request->facilityb_id);
        if (!empty($facility_banner->banner)){
            if (file_exists(public_path('banner-media/'.$facility_banner->banner))){
                unlink(public_path('banner-media/'.$facility_banner->banner));
            }
        }
        $facility_banner->delete();
        return redirect('admin/facility-banner')->with('warning', 'Facility Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $facility_banner = BannerFacility::findOrFail($request->facilityb_id);
            if (!empty($facility_banner->banner)){
                if (file_exists(public_path('banner-media/'.$facility_banner->banner))){
                    unlink(public_path('banner-media/'.$facility_banner->banner));
                }
            }
            $facility_banner->delete();
            return redirect('admin/facility-banner')->with('warning', 'Facility Banner has been deleted successfully');
        }
        $facility_banners = BannerFacility::findOrFail($request->checkBoxArray);
        foreach ($facility_banners as $facility_banner){
            if (!empty($facility_banner->banner)){
                if (file_exists(public_path('banner-media/'.$facility_banner->banner))){
                    unlink(public_path('banner-media/'.$facility_banner->banner));
                }
            }
            $facility_banner->delete();
        }
        return redirect('admin/facility-banner')->with('warning', 'Facility Banner has been bulk deleted successfully');
    }
}
