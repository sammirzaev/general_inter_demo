<?php

namespace App\Http\Controllers;

use App\NavLogo;
use App\User;
use Illuminate\Http\Request;

class NavLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $nav_logos = NavLogo::all();
        return view('admin.nav-logo.nav_logo', compact('users', 'nav_logos'));
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
        $nav_logo = new NavLogo;
        $input = $request->all();
        if ($file = $request->file('logo')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('brands', $name);
            $input['logo'] = $name;
        }
        $nav_logo->setTranslation('title', 'en', $request->title);
        $nav_logo->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('logo')){
            $nav_logo->logo = $name;
        } else {
            $nav_logo->logo = null;
        }
        $nav_logo->is_publish = $request->is_publish;
        $nav_logo->save();
        return redirect('admin/nav-logo')->with('success', 'Nav Logo has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NavLogo  $navLogo
     * @return \Illuminate\Http\Response
     */
    public function show(NavLogo $navLogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NavLogo  $navLogo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $nav_logo = NavLogo::findOrFail($id);
        return view('admin.nav-logo.edit', compact('users', 'nav_logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NavLogo  $navLogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('logo')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('brands', $name);
            $input['logo'] = $name;
        }
        $nav_logo = NavLogo::findOrFail($id);
        $nav_logo->setTranslation('title', 'en', $request->title);
        $nav_logo->setTranslation('title', 'ar', $request->title_ar);
        $nav_logo->is_publish = $request->is_publish;
        $nav_logo->update($input);
        return redirect('admin/nav-logo')->with('info', 'Nav Logo has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NavLogo  $navLogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $nav_logo = NavLogo::findOrFail($request->navlogo_id);
        if (!empty($nav_logo->logo)){
            if (file_exists(public_path('brands/'.$nav_logo->logo))){
                unlink(public_path('brands/'.$nav_logo->logo));
            }
        }
        $nav_logo->delete();
        return redirect('admin/nav-logo')->with('warning', 'Nav Logo has been created successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $nav_logo = NavLogo::findOrFail($request->navlogo_id);
            if (!empty($nav_logo->logo)){
                if (file_exists(public_path('brands/'.$nav_logo->logo))){
                    unlink(public_path('brands/'.$nav_logo->logo));
                }
            }
            $nav_logo->delete();
            return redirect('admin/nav-logo')->with('warning', 'Nav Logo has been created successfully');
        }
        $nav_logos = NavLogo::findOrFail($request->checkBoxArray);
        foreach ($nav_logos as $nav_logo){
            if (!empty($nav_logo->logo)){
                if (file_exists(public_path('brands/'.$nav_logo->logo))){
                    unlink(public_path('brands/'.$nav_logo->logo));
                }
            }
            $nav_logo->delete();
        }
        return redirect('admin/nav-logo')->with('warning', 'Nav Logo has been bulk created successfully');
    }
}
