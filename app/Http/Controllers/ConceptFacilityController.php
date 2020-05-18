<?php

namespace App\Http\Controllers;

use App\ConceptFacility;
use App\User;
use Illuminate\Http\Request;

class ConceptFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $facility_concepts = ConceptFacility::all();
        return view('admin.concept-facility.facility_concept', compact('users', 'facility_concepts'));
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
        $facility_concept = new ConceptFacility;
        $facility_concept->setTranslation('title', 'en', $request->title);
        $facility_concept->setTranslation('title', 'ar', $request->title_ar);
        $facility_concept->setTranslation('description', 'en', $request->description);
        $facility_concept->setTranslation('description', 'ar', $request->description_ar);
        $facility_concept->icon = $request->icon;
        $facility_concept->is_publish = $request->is_publish;
        $facility_concept->save();
        return redirect('admin/facility-concept')->with('success', 'Facility Concept has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConceptFacility  $conceptFacility
     * @return \Illuminate\Http\Response
     */
    public function show(ConceptFacility $conceptFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConceptFacility  $conceptFacility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $facility_concept = ConceptFacility::findOrFail($id);
        return view('admin.concept-facility.edit', compact('users', 'facility_concept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConceptFacility  $conceptFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $facility_concept = ConceptFacility::findOrFail($id);
        $facility_concept->setTranslation('title', 'en', $request->title);
        $facility_concept->setTranslation('title', 'ar', $request->title_ar);
        $facility_concept->setTranslation('description', 'en', $request->description);
        $facility_concept->setTranslation('description', 'ar', $request->description_ar);
        $facility_concept->icon = $request->icon;
        $facility_concept->is_publish = $request->is_publish;
        $facility_concept->update();
        return redirect('admin/facility-concept')->with('info', 'Facility Concept has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConceptFacility  $conceptFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $facility_concept = ConceptFacility::findOrFail($request->facilityc_id);
        $facility_concept->delete();
        return redirect('admin/facility-concept')->with('warning', 'Facility Concept has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $facility_concept = ConceptFacility::findOrFail($request->facilityc_id);
            $facility_concept->delete();
            return redirect('admin/facility-concept')->with('warning', 'Facility Concept has been deleted successfully');
        }
        $facility_concepts = ConceptFacility::findOrFail($request->checkBoxArray);
        foreach ($facility_concepts as $facility_concept){
            $facility_concept->delete();
        }
        return redirect('admin/facility-concept')->with('warning', 'Facility Concept has been bulk deleted successfully');
    }
}
