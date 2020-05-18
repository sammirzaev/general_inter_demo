<?php

namespace App\Http\Controllers;

use App\HomePartner;
use App\User;
use Illuminate\Http\Request;

class HomePartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $home_partners = HomePartner::all();
        return view('admin.home-partners.home_partners', compact('users', 'home_partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home_partners = HomePartner::all();
        return view('admin.home-partners.home_partners', compact('home_partners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $home_partner = new HomePartner;
        $input = $request->all();
        if ($file = $request->file('background')) {
            $name = $file->getClientOriginalName();
            $file->storeAs('home-partner', $name);
            $input['background'] = $name;
        }
        if ($file = $request->file('logo')) {
            $partner = time().'-'.$file->getClientOriginalName();
            $file->storeAs('home-partner', $partner);
            $input['logo'] = $partner;
        }
        $home_partner->setTranslation('title', 'en', $request->title);
        $home_partner->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('background')){
            $home_partner->background = $name;
        } else {
            $home_partner->background = null;
        }
        if ($request->file('logo')){
            $home_partner->logo = $partner;
        } else {
            $home_partner->logo = null;
        }
        $home_partner->is_publish = $request->is_publish;
        $home_partner->save();
        return redirect('admin/home-partner')->with('success', 'Home Partners has been created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomePartner  $homePartner
     * @return \Illuminate\Http\Response
     */
    public function show(HomePartner $homePartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomePartner  $homePartner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $home_partner = HomePartner::findOrFail($id);
        return view('admin.home-partners.edit', compact('users', 'home_partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomePartner  $homePartner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('background')) {
            $name = $file->getClientOriginalName();
            $file->storeAs('home-partner', $name);
            $input['background'] = $name;
        }
        if ($file = $request->file('logo')) {
            $partner = time().'-'.$file->getClientOriginalName();
            $file->storeAs('home-partner', $partner);
            $input['logo'] = $partner;
        }
        $home_partner = HomePartner::findOrFail($id);
        $home_partner->setTranslation('title', 'en', $request->title);
        $home_partner->setTranslation('title', 'ar', $request->title_ar);
        $home_partner->is_publish = $request->is_publish;
        $home_partner->update($input);
        return redirect('admin/home-partner')->with('info', 'Home Partners has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomePartner  $homePartner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $home_partner = HomePartner::findOrFail($request->partner_id);
        if (!empty($home_partner->logo)) {
            if (file_exists(public_path('home-partner/'. $home_partner->logo))) {
                unlink(public_path('home-partner/'. $home_partner->logo));
            }
        }
        $home_partner->delete();
        return redirect('admin/home-partner')->with('warning', 'Home Partner Logo has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)) {
            $home_partner = HomePartner::findOrFail($request->partner_id);
            if (!empty($home_partner->logo)) {
                if (file_exists(public_path('home-partner/'. $home_partner->logo))) {
                    unlink(public_path('home-partner/'. $home_partner->logo));
                }
            }
            $home_partner->delete();
            return redirect('admin/home-partner')->with('warning', 'Home Partner Logo has been deleted successfully');
        }
        $home_partners = HomePartner::findOrFail($request->checkBoxArray);
        foreach ($home_partners as $home_partner) {
            if (!empty($home_partner->logo)){
                if (file_exists(public_path('home-partner/'. $home_partner->logo))) {
                    unlink(public_path('home-partner/'. $home_partner->logo));
                }
            }
            $home_partner->delete();
        }
        return redirect('admin/home-partner')->with('warning', 'Home Partner Logo has been bulk deleted successfully');
    }
}
