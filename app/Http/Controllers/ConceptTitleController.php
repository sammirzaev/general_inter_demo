<?php

namespace App\Http\Controllers;

use App\ConceptTitle;
use App\User;
use Illuminate\Http\Request;

class ConceptTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $concept_titles = ConceptTitle::all();
        return view('admin.concept-title.concept_title', compact('users', 'concept_titles'));
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
        $concept_title = new ConceptTitle;
        $concept_title->setTranslation('title', 'en', $request->title);
        $concept_title->setTranslation('title', 'ar', $request->title_ar);
        $concept_title->is_publish = $request->is_publish;
        $concept_title->save();
        return redirect('admin/concept-title')->with('success', 'Concept Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConceptTitle  $conceptTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ConceptTitle $conceptTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConceptTitle  $conceptTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $concept_title = ConceptTitle::findOrFail($id);
        return view('admin.concept-title.edit', compact('users', 'concept_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConceptTitle  $conceptTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $concept_title = ConceptTitle::findOrFail($id);
        $concept_title->setTranslation('title', 'en', $request->title);
        $concept_title->setTranslation('title', 'ar', $request->title_ar);
        $concept_title->is_publish = $request->is_publish;
        $concept_title->update();
        return redirect('admin/concept-title')->with('info', 'Concept Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return void
     */
    public function destroy(Request $request)
    {
        $concept_title = ConceptTitle::findOrFail($request->conceptt_id);
        $concept_title->delete();
        return redirect('admin/concept-title')->with('warning', 'Concept Title has been deleted successfully');
    }


}
