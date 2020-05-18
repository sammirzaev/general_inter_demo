<?php

namespace App\Http\Controllers;

use App\FacilityTitle;
use App\User;
use Illuminate\Http\Request;

class FacilityTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $facility_titles = FacilityTitle::all();
        return view('admin.facility-title.facility_title', compact('users', 'facility_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facility_titles = FacilityTitle::all();
        return view('admin.facility-title.facility_title', compact('facility_titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facility_title = new FacilityTitle;
        $facility_title->setTranslation('title', 'en', $request->title);
        $facility_title->setTranslation('title', 'ar', $request->title_ar);
        $facility_title->is_publish = $request->is_publish;
        $facility_title->save();
        return redirect('admin/facility-title')->with('success', 'Facility Management Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FacilityTitle  $facilityTitle
     * @return \Illuminate\Http\Response
     */
    public function show(FacilityTitle $facilityTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FacilityTitle  $facilityTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $facility_title = FacilityTitle::findOrFail($id);
        return view('admin.facility-title.edit', compact('users', 'facility_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FacilityTitle  $facilityTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $facility_title = FacilityTitle::findOrFail($id);
        $facility_title->setTranslation('title', 'en', $request->title);
        $facility_title->setTranslation('title', 'ar', $request->title_ar);
        $facility_title->is_publish = $request->is_publish;
        $facility_title->update();
        return redirect('admin/facility-title')->with('info', 'Facility Management Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FacilityTitle  $facilityTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $facility_title = FacilityTitle::findOrFail($request->facility_id);
        $facility_title->delete();
        return redirect('admin/facility-title')->with('warning', 'Facility Management Title has been deleted successfully');
    }
}
