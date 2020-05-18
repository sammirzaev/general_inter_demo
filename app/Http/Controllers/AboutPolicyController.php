<?php

namespace App\Http\Controllers;

use App\AboutPolicy;
use App\AboutStoryCat;
use App\User;
use Illuminate\Http\Request;

class AboutPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_policies = AboutPolicy::all();
        return view('admin.about-policy.about_policy', compact('users', 'story', 'about_policies'));
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
        $about_policy = new AboutPolicy;
        $about_policy->setTranslation('description', 'en', $request->description);
        $about_policy->setTranslation('description', 'ar', $request->description_ar);
        $about_policy->story_id = $request->story_id;
        $about_policy->is_publish = $request->is_publish;
        $about_policy->save();
        return redirect('admin/about-policy')->with('success', 'About Policy has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutPolicy  $aboutPolicy
     * @return \Illuminate\Http\Response
     */
    public function show(AboutPolicy $aboutPolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutPolicy  $aboutPolicy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_policy = AboutPolicy::findOrFail($id);
        return view('admin.about-policy.edit', compact('users', 'story', 'about_policy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutPolicy  $aboutPolicy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_policy = AboutPolicy::findOrFail($id);
        $about_policy->setTranslation('description', 'en', $request->description);
        $about_policy->setTranslation('description', 'ar', $request->description_ar);
        $about_policy->story_id = $request->story_id;
        $about_policy->is_publish = $request->is_publish;
        $about_policy->update();
        return redirect('admin/about-policy')->with('info', 'About Policy has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutPolicy  $aboutPolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_policy = AboutPolicy::findOrFail($request->policy_id);
        $about_policy->delete();
        return redirect('admin/about-policy')->with('warning', 'About Policy has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_policy = AboutPolicy::findOrFail($request->policy_id);
            $about_policy->delete();
            return redirect('admin/about-policy')->with('warning', 'About Policy has been deleted successfully');
        }
        $about_policies = AboutPolicy::findOrFail($request->checkBoxArray);
        foreach ($about_policies as $about_policy){
            $about_policy->delete();
        }
        return redirect('admin/about-policy')->with('warning', 'About Policy has been bulk deleted successfully');
    }
}
