<?php

namespace App\Http\Controllers;

use App\ConceptWater;
use App\User;
use Illuminate\Http\Request;

class ConceptWaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $water_concepts = ConceptWater::all();
        return view('admin.concept-water.water_concept', compact('users', 'water_concepts'));
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
        $water_concept = new ConceptWater;
        $water_concept->setTranslation('title', 'en', $request->title);
        $water_concept->setTranslation('title', 'ar', $request->title_ar);
        $water_concept->setTranslation('description', 'en', $request->description);
        $water_concept->setTranslation('description', 'ar', $request->description_ar);
        $water_concept->icon = $request->icon;
        $water_concept->is_publish = $request->is_publish;
        $water_concept->save();
        return redirect('admin/water-concept')->with('success', 'Water Concept has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConceptWater  $conceptWater
     * @return \Illuminate\Http\Response
     */
    public function show(ConceptWater $conceptWater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConceptWater  $conceptWater
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $water_concept = ConceptWater::findOrFail($id);
        return view('admin.concept-water.edit', compact('users', 'water_concept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConceptWater  $conceptWater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $water_concept = ConceptWater::findOrFail($id);
        $water_concept->setTranslation('title', 'en', $request->title);
        $water_concept->setTranslation('title', 'ar', $request->title_ar);
        $water_concept->setTranslation('description', 'en', $request->description);
        $water_concept->setTranslation('description', 'ar', $request->description_ar);
        $water_concept->icon = $request->icon;
        $water_concept->is_publish = $request->is_publish;
        $water_concept->update();
        return redirect('admin/water-concept')->with('info', 'Water Concept has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConceptWater  $conceptWater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $water_concept = ConceptWater::findOrFail($request->waterc_id);
        $water_concept->delete();
        return redirect('admin/water-concept')->with('warning', 'Water Concept has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $water_concept = ConceptWater::findOrFail($request->waterc_id);
            $water_concept->delete();
            return redirect('admin/water-concept')->with('warning', 'Water Concept has been deleted successfully');
        }
        $water_concepts = ConceptWater::findOrFail($request->checkBoxArray);
        foreach ($water_concepts as $water_concept){
            $water_concept->delete();
        }
        return redirect('admin/water-concept')->with('warning', 'Water Concept has been bulk deleted successfully');
    }
}
