<?php

namespace App\Http\Controllers;

use App\CategoryFire;
use App\TypeFire;
use App\User;
use Illuminate\Http\Request;

class CategoryFireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type_fire = TypeFire::pluck('title', 'id')->all();
        $fire_categories = CategoryFire::all();
        return view('admin.category-fire.fire_category', compact('users', 'type_fire', 'fire_categories'));
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
        $fire_category = new CategoryFire;
        $fire_category->setTranslation('title', 'en', $request->title);
        $fire_category->setTranslation('title', 'ar', $request->title_ar);
        $fire_category->type_id = $request->type_id;
        $fire_category->is_publish = $request->is_publish;
        $fire_category->save();
        return redirect('admin/fire-category')->with('success', 'Fire Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryFire  $categoryFire
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryFire $categoryFire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryFire  $categoryFire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type_fire = TypeFire::pluck('title', 'id')->all();
        $fire_category = CategoryFire::findOrFail($id);
        return view('admin.category-fire.edit', compact('users', 'type_fire', 'fire_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryFire  $categoryFire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fire_category = CategoryFire::findOrFail($id);
        $fire_category->setTranslation('title', 'en', $request->title);
        $fire_category->setTranslation('title', 'ar', $request->title_ar);
        $fire_category->type_id = $request->type_id;
        $fire_category->is_publish = $request->is_publish;
        $fire_category->update();
        return redirect('admin/fire-category')->with('info', 'Fire Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryFire  $categoryFire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $fire_category = CategoryFire::findOrFail($request->firecat_id);
        $fire_category->delete();
        return redirect('admin/fire-category')->with('warning', 'Fire Category has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $fire_category = CategoryFire::findOrFail($request->firecat_id);
            $fire_category->delete();
            return redirect('admin/fire-category')->with('warning', 'Fire Category has been deleted successfully');
        }
        $fire_categories = CategoryFire::findOrFail($request->checkBoxArray);
        foreach ($fire_categories as $fire_category){
            $fire_category->delete();
        }
        return redirect('admin/fire-category')->with('warning', 'Fire Category has been bulk deleted successfully');
    }
}
