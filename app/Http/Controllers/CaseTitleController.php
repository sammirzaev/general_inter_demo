<?php

namespace App\Http\Controllers;

use App\CaseTitle;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class CaseTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $case_titles = CaseTitle::all();
        return view('admin.case-title.case_title', compact('case_titles', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $case_titles = CaseTitle::all();
        return view('admin.case-title.case_title', compact('case_titles', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $case_title = new CaseTitle;
        $case_title->setTranslation('title', 'en', $request->title);
        $case_title->setTranslation('title', 'ar', $request->title_ar);
        $case_title->is_publish = $request->is_publish;
        $case_title->save();
        return redirect('admin/case-title')->with('success', 'Case Studies Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaseTitle  $caseTitle
     * @return \Illuminate\Http\Response
     */
    public function show(CaseTitle $caseTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseTitle  $caseTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $case_title = CaseTitle::findOrFail($id);
        $users = User::all();
        return view('admin.case-title.edit', compact('users', 'case_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaseTitle  $caseTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $case_title = CaseTitle::findOrFail($id);
        $case_title->setTranslation('title', 'en', $request->title);
        $case_title->setTranslation('title', 'ar', $request->title_ar);
        $case_title->is_publish = $request->is_publish;
        $case_title->update();
        return redirect('admin/case-title')->with('info', 'Case Studies Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaseTitle  $caseTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $case_title = CaseTitle::findOrFail($request->case_id);
        $case_title->delete();
        return redirect('admin/case-title')->with('warning', 'Case Studies Title has been deleted successfully');
    }
}
