<?php

namespace App\Http\Controllers;

use App\CaseCategory;
use App\User;
use Illuminate\Http\Request;

class CaseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $case_cats = CaseCategory::all();
        return view('admin.case-cat.case_cat', compact('users', 'case_cats'));
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
        $case_cat = new CaseCategory;
        $case_cat->setTranslation('title', 'en', $request->title);
        $case_cat->setTranslation('title', 'ar', $request->title_ar);
        $case_cat->is_publish = $request->is_publish;
        $case_cat->save();
        return redirect('admin/case-category')->with('success', 'Case Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaseCategory  $caseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CaseCategory $caseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseCategory  $caseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $case_cat = CaseCategory::findOrFail($id);
        return view('admin.case-cat.edit', compact('users', 'case_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaseCategory  $caseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $case_cat = CaseCategory::findOrFail($id);
        $case_cat->setTranslation('title', 'en', $request->title);
        $case_cat->setTranslation('title', 'ar', $request->title_ar);
        $case_cat->is_publish = $request->is_publish;
        $case_cat->update();
        return redirect('admin/case-category')->with('info', 'Case Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return void
     */
    public function destroy(Request $request)
    {
        $case_cat = CaseCategory::findOrFail($request->casecat_id);
        $case_cat->delete();
        return redirect('admin/case-category')->with('warning', 'Case Study has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $case_cat = CaseCategory::findOrFail($request->casecat_id);
            $case_cat->delete();
            return redirect('admin/case-category')->with('warning', 'Case Study has been deleted successfully');
        }
        $case_cats = CaseCategory::findOrFail($request->checkBoxArray);
        foreach ($case_cats as $case_cat){
            $case_cat->delete();
        }
        return redirect('admin/case-category')->with('warning', 'Case Study has been bulk deleted successfully');
    }
}
