<?php

namespace App\Http\Controllers;

use App\HomeServiceCat;
use App\User;
use Illuminate\Http\Request;

class HomeServiceCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $home_service_cats = HomeServiceCat::all();
        return view('admin.home-service-cat.home_service_cat', compact('users', 'home_service_cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home_service_cats = HomeServiceCat::all();
        return view('admin/home-service-cat', compact('users', 'home_service_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $home_service_cat = new HomeServiceCat;
        $home_service_cat->setTranslation('name', 'en', $request->name);
        $home_service_cat->setTranslation('name', 'ar', $request->name_ar);
        $home_service_cat->icon = $request->icon;
        $home_service_cat->is_publish = $request->is_publish;
        $home_service_cat->save();
        return redirect('admin/home-service-cat')->with('success', 'Home Service Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeServiceCat  $homeServiceCat
     * @return \Illuminate\Http\Response
     */
    public function show(HomeServiceCat $homeServiceCat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeServiceCat  $homeServiceCat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $home_service_cat = HomeServiceCat::findOrFail($id);
        return view('admin.home-service-cat.edit', compact('users', 'home_service_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeServiceCat  $homeServiceCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home_service_cat = HomeServiceCat::findOrFail($id);
        $home_service_cat->setTranslation('name', 'en', $request->name);
        $home_service_cat->setTranslation('name', 'ar', $request->name_ar);
        $home_service_cat->icon = $request->icon;
        $home_service_cat->is_publish = $request->is_publish;
        $home_service_cat->update();
        return redirect('admin/home-service-cat')->with('info', 'Home Service Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeServiceCat  $homeServiceCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $home_service_cat = HomeServiceCat::findOrFail($request->servicecat_id);
        $home_service_cat->delete();
        return redirect('admin/home-service-cat')->with('warning', 'Home Service Category has been deleted successfully');
    }

    public function deleteAll(Request $request)
    {
        if (isset($request->delete_single)){
            $home_service_cat = HomeServiceCat::findOrFail($request->servicecat_id);
            $home_service_cat->delete();
            return redirect('admin/home-service-cat')->with('warning', 'Home Service Category has been deleted successfully');
        }
        $home_service_cats = HomeServiceCat::findOrFail($request->checkBoxArray);
        foreach ($home_service_cats as $home_service_cat)
        {
            $home_service_cat->delete();
        }
        return redirect('admin/home-service-cat')->with('warning', 'Home Service Category has been bulk deleted successfully');
    }
}
