<?php

namespace App\Http\Controllers;

use App\CaseCategory;
use App\CaseMedia;
use App\CaseStudy;
use App\User;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $case_cat = CaseCategory::pluck('title', 'id')->all();
        $case_media = CaseMedia::pluck('title', 'id')->all();
        $case_studies = CaseStudy::all();
        return view('admin.case-study.case_study', compact('users', 'case_cat', 'case_media', 'case_studies'));
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
        $case_study = new CaseStudy;
        $case_study->setTranslation('title', 'en', $request->title);
        $case_study->setTranslation('title', 'ar', $request->title_ar);
        $case_study->setTranslation('description', 'en', $request->description);
        $case_study->setTranslation('description', 'ar', $request->description_ar);
        $case_study->cat_id = $request->cat_id;
        $case_study->media_id = $request->media_id;
        $case_study->is_publish = $request->is_publish;
        $case_study->save();
        return redirect('admin/case-study')->with('success', 'Case Study has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function show(CaseStudy $caseStudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $case_cat = CaseCategory::pluck('title', 'id')->all();
        $case_media = CaseMedia::pluck('title', 'id')->all();
        $case_study = CaseStudy::findOrFail($id);
        return view('admin.case-study.edit', compact('users', 'case_cat', 'case_media', 'case_study'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $case_study = CaseStudy::findOrFail($id);
        $case_study->setTranslation('title', 'en', $request->title);
        $case_study->setTranslation('title', 'ar', $request->title_ar);
        $case_study->setTranslation('description', 'en', $request->description);
        $case_study->setTranslation('description', 'ar', $request->description_ar);
        $case_study->cat_id = $request->cat_id;
        $case_study->media_id = $request->media_id;
        $case_study->is_publish = $request->is_publish;
        $case_study->update();
        return redirect('admin/case-study')->with('info', 'Case Study has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $case_study = CaseStudy::findOrFail($request->casest_id);
        $case_study->media()->delete();
        $case_study->category()->delete();
        $case_study->delete();
        return redirect('admin/case-study')->with('warning', 'Case Study has been created successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $case_study = CaseStudy::findOrFail($request->casest_id);
            $case_study->media()->delete();
            $case_study->category()->delete();
            $case_study->delete();
            return redirect('admin/case-study')->with('warning', 'Case Study has been created successfully');
        }
        $case_studies = CaseStudy::findOrFail($request->checkBoxArray);
        foreach ($case_studies as $case_study){
            $case_study->media()->delete();
            $case_study->category()->delete();
            $case_study->delete();
        }
        return redirect('admin/case-study')->with('warning', 'Case Study has been bulk created successfully');
    }
}
