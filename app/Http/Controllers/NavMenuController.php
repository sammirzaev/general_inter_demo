<?php

namespace App\Http\Controllers;

use App\NavMenu;
use App\User;
use Illuminate\Http\Request;

class NavMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $nav_menus = NavMenu::all();
        return view('admin.nav-menu.nav_menu', compact('users', 'nav_menus'));
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
        $nav_menu = new NavMenu;
        $nav_menu->setTranslation('home', 'en', $request->home);
        $nav_menu->setTranslation('home', 'ar', $request->home_ar);
        $nav_menu->setTranslation('about', 'en', $request->about);
        $nav_menu->setTranslation('about', 'ar', $request->about_ar);
        $nav_menu->setTranslation('what_we_do', 'en', $request->what_we_do);
        $nav_menu->setTranslation('what_we_do', 'ar', $request->what_we_do_ar);
        $nav_menu->setTranslation('fire', 'en', $request->fire);
        $nav_menu->setTranslation('fire', 'ar', $request->fire_ar);
        $nav_menu->setTranslation('security', 'en', $request->security);
        $nav_menu->setTranslation('security', 'ar', $request->security_ar);
        $nav_menu->setTranslation('water', 'en', $request->water);
        $nav_menu->setTranslation('water', 'ar', $request->water_ar);
        $nav_menu->setTranslation('facility', 'en', $request->facility);
        $nav_menu->setTranslation('facility', 'ar', $request->facility_ar);
        $nav_menu->setTranslation('projects', 'en', $request->projects);
        $nav_menu->setTranslation('projects', 'ar', $request->projects_ar);
        $nav_menu->setTranslation('insights', 'en', $request->insights);
        $nav_menu->setTranslation('insights', 'ar', $request->insights_ar);
        $nav_menu->setTranslation('news', 'en', $request->news);
        $nav_menu->setTranslation('news', 'ar', $request->news_ar);
        $nav_menu->setTranslation('case', 'en', $request->case);
        $nav_menu->setTranslation('case', 'ar', $request->case_ar);
        $nav_menu->setTranslation('contact', 'en', $request->contact);
        $nav_menu->setTranslation('contact', 'ar', $request->contact_ar);
        $nav_menu->setTranslation('search', 'en', $request->search);
        $nav_menu->setTranslation('search', 'ar', $request->search_ar);
        $nav_menu->setTranslation('lang', 'en', $request->lang);
        $nav_menu->setTranslation('lang', 'ar', $request->lang_ar);
        $nav_menu->is_publish = $request->is_publish;
        $nav_menu->save();
        return redirect('admin/nav-menu')->with('success', 'Nav Menu has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NavMenu  $navMenu
     * @return \Illuminate\Http\Response
     */
    public function show(NavMenu $navMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NavMenu  $navMenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $nav_menu = NavMenu::findOrFail($id);
        return view('admin.nav-menu.edit', compact('users', 'nav_menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NavMenu  $navMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nav_menu = NavMenu::findOrFail($id);
        $nav_menu->setTranslation('home', 'en', $request->home);
        $nav_menu->setTranslation('home', 'ar', $request->home_ar);
        $nav_menu->setTranslation('about', 'en', $request->about);
        $nav_menu->setTranslation('about', 'ar', $request->about_ar);
        $nav_menu->setTranslation('what_we_do', 'en', $request->what_we_do);
        $nav_menu->setTranslation('what_we_do', 'ar', $request->what_we_do_ar);
        $nav_menu->setTranslation('fire', 'en', $request->fire);
        $nav_menu->setTranslation('fire', 'ar', $request->fire_ar);
        $nav_menu->setTranslation('security', 'en', $request->security);
        $nav_menu->setTranslation('security', 'ar', $request->security_ar);
        $nav_menu->setTranslation('water', 'en', $request->water);
        $nav_menu->setTranslation('water', 'ar', $request->water_ar);
        $nav_menu->setTranslation('facility', 'en', $request->facility);
        $nav_menu->setTranslation('facility', 'ar', $request->facility_ar);
        $nav_menu->setTranslation('projects', 'en', $request->projects);
        $nav_menu->setTranslation('projects', 'ar', $request->projects_ar);
        $nav_menu->setTranslation('insights', 'en', $request->insights);
        $nav_menu->setTranslation('insights', 'ar', $request->insights_ar);
        $nav_menu->setTranslation('news', 'en', $request->news);
        $nav_menu->setTranslation('news', 'ar', $request->news_ar);
        $nav_menu->setTranslation('case', 'en', $request->case);
        $nav_menu->setTranslation('case', 'ar', $request->case_ar);
        $nav_menu->setTranslation('contact', 'en', $request->contact);
        $nav_menu->setTranslation('contact', 'ar', $request->contact_ar);
        $nav_menu->setTranslation('search', 'en', $request->search);
        $nav_menu->setTranslation('search', 'ar', $request->search_ar);
        $nav_menu->setTranslation('lang', 'en', $request->lang);
        $nav_menu->setTranslation('lang', 'ar', $request->lang_ar);
        $nav_menu->is_publish = $request->is_publish;
        $nav_menu->update();
        return redirect('admin/nav-menu')->with('info', 'Nav Menu has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NavMenu  $navMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $nav_menu = NavMenu::findOrFail($request->navmenu_id);
        $nav_menu->delete();
        return redirect('admin/nav-menu')->with('warning', 'Nav Menu has been deleted successfully');
    }
}
