<?php

namespace App\Http\Controllers;

use App\FacilityTitle;
use App\TypeFacility;
use App\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\StaticAnalysis\HappyPath\AssertIsArray\consume;
use function Sodium\compare;

class TypeFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $facility_types = TypeFacility::all();
        return view('admin.type-facility.facility_type', compact('users', 'facility_types'));
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
        $facility_type = new TypeFacility;
        $facility_type->setTranslation('title', 'en', $request->title);
        $facility_type->setTranslation('title', 'ar', $request->title_ar);
        $facility_type->icon = $request->icon;
        $facility_type->is_publish = $request->is_publish;
        $facility_type->save();
        return redirect('admin/facility-type')->with('success', 'Facility Type has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeFacility  $typeFacility
     * @return \Illuminate\Http\Response
     */
    public function show(TypeFacility $typeFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeFacility  $typeFacility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $facility_type = TypeFacility::findOrFail($id);
        return view('admin.type-facility.edit', compact('users', 'facility_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeFacility  $typeFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $facility_type = TypeFacility::findOrFail($id);
        $facility_type->setTranslation('title', 'en', $request->title);
        $facility_type->setTranslation('title', 'ar', $request->title_ar);
        $facility_type->icon = $request->icon;
        $facility_type->is_publish = $request->is_publish;
        $facility_type->update();
        return redirect('admin/facility-type')->with('info', 'Facility Type has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeFacility  $typeFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $facility_type = TypeFacility::findOrFail($request->facilitytype_id);
        $facility_type->delete();
        return redirect('admin/facility-type')->with('warning', 'Facility Type has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $facility_type = TypeFacility::findOrFail($request->facilitytype_id);
            $facility_type->delete();
            return redirect('admin/facility-type')->with('warning', 'Facility Type has been deleted successfully');
        }
        $facility_types = TypeFacility::findOrFail($request->checkBoxArray);
        foreach ($facility_types as $facility_type){
            $facility_type->delete();
        }
        return redirect('admin/facility-type')->with('warning', 'Facility Type has been bulk deleted successfully');
    }
}
