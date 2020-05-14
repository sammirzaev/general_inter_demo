<?php

namespace App\Http\Controllers;

use App\Brochures;
use App\FilterBrochure;
use App\User;
use Illuminate\Http\Request;

class FilterBrochureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $users = User::all();
        $brochure_filters = FilterBrochure::where('filter', 'like', '%'.$search.'%')
            ->orderBy('id', 'DESC')->paginate(10);
        return view('admin.brochure_category.brochure_category', compact('users', 'brochure_filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brochure_filter = FilterBrochure::all();
        return view('admin.brochure_category.brochure_category', compact('brochure_filter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filter = new FilterBrochure();
        $filter->setTranslation('filter', 'en', $request->filter)
               ->setTranslation('filter', 'ar', $request->filter_ar);
        $filter->save();
        return redirect('admin/brochure-filter')->with('success', 'Brochure Filter has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FilterBrochure  $filterBrochure
     * @return \Illuminate\Http\Response
     */
    public function show(FilterBrochure $filterBrochure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FilterBrochure  $filterBrochure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $brochure_filter = FilterBrochure::findOrFail($id);
        return view('admin.brochure_category.edit', compact('users', 'brochure_filter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FilterBrochure  $filterBrochure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filter = FilterBrochure::findOrFail($id)
            ->setTranslation('filter', 'en', $request->filter)
            ->setTranslation('filter', 'ar', $request->filter_ar);
        $filter->update();
        return redirect('admin/brochure-filter')->with('info', 'Brochure Filter has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FilterBrochure  $filterBrochure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $brochure_filter = FilterBrochure::findOrFail($request->filter_id);
        $brochure_filter->delete();
        return redirect('admin/brochure-filter')->with('warning', 'Brochure Filter has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if(isset($request->delete_single))
        {
            $brochure_filter = FilterBrochure::findOrFail($request->filter_id);
            $brochure_filter->delete();
            return redirect('admin/brochure-filter')->with('warning', 'Brochure Filter has been deleted successfully');
        }

        $brochure_filter = FilterBrochure::findOrFail($request->checkBoxArray);
        foreach ($brochure_filter as $filter)
        {
            $filter->delete();
        }
        return redirect('admin/brochure-filter')->with('warning', 'Brochure Filter has been bulk deleted successfully');
    }
}
