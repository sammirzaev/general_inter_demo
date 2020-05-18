<?php

namespace App\Http\Controllers;

use App\ConceptSecurity;
use App\User;
use Illuminate\Http\Request;

class ConceptSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $security_concepts = ConceptSecurity::all();
        return view('admin.concept-security.security_concept', compact('users', 'security_concepts'));
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
        $security_concept = new ConceptSecurity;
        $security_concept->setTranslation('title', 'en', $request->title);
        $security_concept->setTranslation('title', 'ar', $request->title_ar);
        $security_concept->setTranslation('description', 'en', $request->description);
        $security_concept->setTranslation('description', 'ar', $request->description_ar);
        $security_concept->icon = $request->icon;
        $security_concept->is_publish = $request->is_publish;
        $security_concept->save();
        return redirect('admin/security-concept')->with('success', 'Security Concept has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConceptSecurity  $conceptSecurity
     * @return \Illuminate\Http\Response
     */
    public function show(ConceptSecurity $conceptSecurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConceptSecurity  $conceptSecurity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $security_concept = ConceptSecurity::findOrFail($id);
        return view('admin.concept-security.edit', compact('users', 'security_concept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConceptSecurity  $conceptSecurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $security_concept = ConceptSecurity::findOrFail($id);
        $security_concept->setTranslation('title', 'en', $request->title);
        $security_concept->setTranslation('title', 'ar', $request->title_ar);
        $security_concept->setTranslation('description', 'en', $request->description);
        $security_concept->setTranslation('description', 'ar', $request->description_ar);
        $security_concept->icon = $request->icon;
        $security_concept->is_publish = $request->is_publish;
        $security_concept->update();
        return redirect('admin/security-concept')->with('info', 'Security Concept has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConceptSecurity  $conceptSecurity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $security_concept = ConceptSecurity::findOrFail($request->securityc_id);
        $security_concept->delete();
        return redirect('admin/security-concept')->with('warning', 'Security Concept has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $security_concept = ConceptSecurity::findOrFail($request->securityc_id);
            $security_concept->delete();
            return redirect('admin/security-concept')->with('warning', 'Security Concept has been deleted successfully');
        }
        $security_concepts = ConceptSecurity::findOrFail($request->checkBoxArray);
        foreach ($security_concepts as $security_concept){
            $security_concept->delete();
        }
        return redirect('admin/security-concept')->with('warning', 'Security Concept has been bulk deleted successfully');
    }
}
