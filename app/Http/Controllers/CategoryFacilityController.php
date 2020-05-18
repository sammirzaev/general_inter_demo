<?php

namespace App\Http\Controllers;

use App\CategoryFacility;
use App\TypeFacility;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type_facility = TypeFacility::pluck('title', 'id')->all();
        $facility_categories = CategoryFacility::all();
        return view('admin.category-facility.facility_category', compact('users', 'type_facility', 'facility_categories'));
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
        $facility_category = new CategoryFacility;
        $facility_category->setTranslation('title', 'en', $request->title);
        $facility_category->setTranslation('title', 'ar', $request->title_ar);
        $facility_category->type_id = $request->type_id;
        $facility_category->is_publish = $request->is_publish;
        $facility_category->save();
        return redirect('admin/facility-category')->with('success', 'Facility Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryFacility  $categoryFacility
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryFacility $categoryFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryFacility  $categoryFacility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type_facility = TypeFacility::pluck('title', 'id')->all();
        $facility_category = CategoryFacility::findOrFail($id);
        return view('admin.category-facility.edit', compact('users', 'type_facility', 'facility_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryFacility  $categoryFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $facility_category = CategoryFacility::findOrFail($id);
        $facility_category->setTranslation('title', 'en', $request->title);
        $facility_category->setTranslation('title', 'ar', $request->title_ar);
        $facility_category->type_id = $request->type_id;
        $facility_category->is_publish = $request->is_publish;
        $facility_category->update();
        return redirect('admin/facility-category')->with('info', 'Facility Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryFacility  $categoryFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $facility_category = CategoryFacility::findOrFail($request->facilitycat_id);
        $facility_category->delete();
        return redirect('admin/facility-category')->with('warning', 'Facility Category has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $facility_category = CategoryFacility::findOrFail($request->facilitycat_id);
            $facility_category->delete();
            return redirect('admin/facility-category')->with('warning', 'Facility Category has been deleted successfully');
        }
        $facility_categories = CategoryFacility::findOrFail($request->checkBoxArray);
        foreach ($facility_categories as $facility_category){
            $facility_category->delete();
        }
        return redirect('admin/facility-category')->with('warning', 'Facility Category has been bulk deleted successfully');
    }
}
