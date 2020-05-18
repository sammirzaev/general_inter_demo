<?php

namespace App\Http\Controllers;

use App\BannerContact;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class BannerContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $contact_banners = BannerContact::all();
        return view('admin.banner-contact.contact_banner', compact('users', 'contact_banners'));
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
        $contact_banner = new BannerContact;
        $input = $request->all();
        if ($file = $request->file('banner')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('banner-media', $name);
            $input['banner'] = $name;
        }
        $contact_banner->setTranslation('head_title', 'en', $request->head_title);
        $contact_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $contact_banner->setTranslation('title', 'en', $request->title);
        $contact_banner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('banner')){
            $contact_banner->banner = $name;
        } else {
            $contact_banner->banner = null;
        }
        $contact_banner->is_publish = $request->is_publish;
        $contact_banner->save();
        return redirect('admin/contact-banner')->with('success', 'ContactDetails Banner has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerContact  $bannerContact
     * @return \Illuminate\Http\Response
     */
    public function show(BannerContact $bannerContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerContact  $bannerContact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $contact_banner = BannerContact::findOrFail($id);
        return view('admin.banner-contact.edit', compact('users', 'contact_banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerContact  $bannerContact
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
        $contact_banner = BannerContact::findOrFail($id);
        $contact_banner->setTranslation('head_title', 'en', $request->head_title);
        $contact_banner->setTranslation('head_title', 'ar', $request->head_title_ar);
        $contact_banner->setTranslation('title', 'en', $request->title);
        $contact_banner->setTranslation('title', 'ar', $request->title_ar);
        $contact_banner->is_publish = $request->is_publish;
        $contact_banner->update($input);
        return redirect('admin/contact-banner')->with('info', 'ContactDetails Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerContact  $bannerContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contact_banner = BannerContact::findOrFail($request->contactb_id);
        if (!empty($contact_banner->banner)){
            if (file_exists(public_path('banner-media/'.$contact_banner->banner))){
                unlink(public_path('banner-media/'.$contact_banner->banner));
            }
        }
        $contact_banner->delete();
        return redirect('admin/contact-banner')->with('warning', 'ContactDetails Banner has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $contact_banner = BannerContact::findOrFail($request->contactb_id);
            if (!empty($contact_banner->banner)){
                if (file_exists(public_path('banner-media/'.$contact_banner->banner))){
                    unlink(public_path('banner-media/'.$contact_banner->banner));
                }
            }
            $contact_banner->delete();
            return redirect('admin/contact-banner')->with('warning', 'ContactDetails Banner has been deleted successfully');
        }
        $contact_banners = BannerContact::findOrFail($request->checkBoxArray);
        foreach ($contact_banners as $contact_banner){
            if (!empty($contact_banner->banner)){
                if (file_exists(public_path('banner-media/'.$contact_banner->banner))){
                    unlink(public_path('banner-media/'.$contact_banner->banner));
                }
            }
            $contact_banner->delete();
        }
        return redirect('admin/contact-banner')->with('warning', 'ContactDetails Banner has been bulk deleted successfully');
    }
}
