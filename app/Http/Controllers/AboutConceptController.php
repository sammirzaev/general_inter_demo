<?php

namespace App\Http\Controllers;

use App\AboutConcept;
use App\User;
use Illuminate\Http\Request;

class AboutConceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $about_concepts = AboutConcept::all();
        return view('admin.about-concept.about_concept', compact('users', 'about_concepts'));
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
        $about_concept = new AboutConcept;
        $about_concept->setTranslation('title', 'en', $request->title);
        $about_concept->setTranslation('title', 'ar', $request->title_ar);
        $about_concept->setTranslation('description', 'en', $request->description);
        $about_concept->setTranslation('description', 'ar', $request->description_ar);
        $about_concept->icon = $request->icon;
        $about_concept->is_publish = $request->is_publish;
        $about_concept->save();
        return redirect('admin/about-concept')->with('success', 'About Concept has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutConcept  $aboutConcept
     * @return \Illuminate\Http\Response
     */
    public function show(AboutConcept $aboutConcept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutConcept  $aboutConcept
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $about_concept = AboutConcept::findOrFail($id);
        return view('admin.about-concept.edit', compact('users', 'about_concept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutConcept  $aboutConcept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_concept = AboutConcept::findOrFail($id);
        $about_concept->setTranslation('title', 'en', $request->title);
        $about_concept->setTranslation('title', 'ar', $request->title_ar);
        $about_concept->setTranslation('description', 'en', $request->description);
        $about_concept->setTranslation('description', 'ar', $request->description_ar);
        $about_concept->icon = $request->icon;
        $about_concept->is_publish = $request->is_publish;
        $about_concept->update();
        return redirect('admin/about-concept')->with('info', 'About Concept has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutConcept  $aboutConcept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_concept = AboutConcept::findOrFail($request->concept_id);
        $about_concept->delete();
        return redirect('admin/about-concept')->with('warning', 'About Concept has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_concept = AboutConcept::findOrFail($request->concept_id);
            $about_concept->delete();
            return redirect('admin/about-concept')->with('warning', 'About Concept has been deleted successfully');
        }
        $about_concepts = AboutConcept::findOrFail($request->checkBoxArray);
        foreach ($about_concepts as $about_concept) {
            $about_concept->delete();
        }
        return redirect('admin/about-concept')->with('warning', 'About Concept has been bulk deleted successfully');
    }
}
