<?php

namespace App\Http\Controllers;

use App\ConceptFire;
use App\User;
use Illuminate\Http\Request;

class ConceptFireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $fire_concepts = ConceptFire::all();
        return view('admin.concept-fire.fire_concept', compact('users', 'fire_concepts'));
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
        $fire_concept = new ConceptFire;
        $fire_concept->setTranslation('title', 'en', $request->title);
        $fire_concept->setTranslation('title', 'ar', $request->title_ar);
        $fire_concept->setTranslation('description', 'en', $request->description);
        $fire_concept->setTranslation('description', 'ar', $request->description_ar);
        $fire_concept->icon = $request->icon;
        $fire_concept->is_publish = $request->is_publish;
        $fire_concept->save();
        return redirect('admin/fire-concept')->with('success', 'Fire Concept has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConceptFire  $conceptFire
     * @return \Illuminate\Http\Response
     */
    public function show(ConceptFire $conceptFire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConceptFire  $conceptFire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $fire_concept = ConceptFire::findOrFail($id);
        return view('admin.concept-fire.edit', compact('users', 'fire_concept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConceptFire  $conceptFire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fire_concept = ConceptFire::findOrFail($id);
        $fire_concept->setTranslation('title', 'en', $request->title);
        $fire_concept->setTranslation('title', 'ar', $request->title_ar);
        $fire_concept->setTranslation('description', 'en', $request->description);
        $fire_concept->setTranslation('description', 'ar', $request->description_ar);
        $fire_concept->icon = $request->icon;
        $fire_concept->is_publish = $request->is_publish;
        $fire_concept->update();
        return redirect('admin/fire-concept')->with('info', 'Fire Concept has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConceptFire  $conceptFire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $fire_concept = ConceptFire::findOrFail($request->firec_id);
        $fire_concept->delete();
        return redirect('admin/fire-concept')->with('warning', 'Fire Concept has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $fire_concept = ConceptFire::findOrFail($request->firec_id);
            $fire_concept->delete();
            return redirect('admin/fire-concept')->with('warning', 'Fire Concept has been deleted successfully');
        }
        $fire_concepts = ConceptFire::findOrFail($request->checkBoxArray);
        foreach ($fire_concepts as $fire_concept){
            $fire_concept->delete();
        }
        return redirect('admin/fire-concept')->with('warning', 'Fire Concept has been bulk deleted successfully');
    }
}
