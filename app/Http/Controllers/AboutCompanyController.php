<?php

namespace App\Http\Controllers;

use App\AboutCompany;
use App\AboutStoryCat;
use App\User;
use Illuminate\Http\Request;

class AboutCompanyController extends Controller
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
        $about_companies = AboutCompany::all();
        return view('admin.about-company.about_company', compact('users', 'story', 'about_companies'));
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
        $about_company = new AboutCompany;
        $about_company->setTranslation('title', 'en', $request->title);
        $about_company->setTranslation('title', 'ar', $request->title_ar);
        $about_company->setTranslation('description', 'en', $request->description);
        $about_company->setTranslation('description', 'ar', $request->description_ar);
        $about_company->story_id = $request->story_id;
        $about_company->is_publish = $request->is_publish;
        $about_company->save();
        return redirect('admin/about-company')->with('success', 'About Company has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function show(AboutCompany $aboutCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $story = AboutStoryCat::pluck('story_cat', 'id')->all();
        $about_company = AboutCompany::findOrFail($id);
        return view('admin.about-company.edit', compact('users', 'story', 'about_company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_company = AboutCompany::findOrFail($id);
        $about_company->setTranslation('title', 'en', $request->title);
        $about_company->setTranslation('title', 'ar', $request->title_ar);
        $about_company->setTranslation('description', 'en', $request->description);
        $about_company->setTranslation('description', 'ar', $request->description_ar);
        $about_company->story_id = $request->story_id;
        $about_company->is_publish = $request->is_publish;
        $about_company->update();
        return redirect('admin/about-company')->with('info', 'About Company has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $about_company = AboutCompany::findOrFail($request->company_id);
        $about_company->delete();
        return redirect('admin/about-company')->with('warning', 'About Company has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $about_company = AboutCompany::findOrFail($request->company_id);
            $about_company->delete();
            return redirect('admin/about-company')->with('warning', 'About Company has been deleted successfully');
        }
        $about_companies = AboutCompany::findOrFail($request->checkBoxArray);
        foreach ($about_companies as $about_company){
            $about_company->delete();
        }
        return redirect('admin/about-company')->with('warning', 'About Company has been bulk deleted successfully');
    }
}
