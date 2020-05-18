<?php

namespace App\Http\Controllers;

use App\CategoryWater;
use App\TypeWater;
use App\User;
use Illuminate\Http\Request;

class CategoryWaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type_water = TypeWater::pluck('title', 'id')->all();
        $water_categories = CategoryWater::all();
        return view('admin.category-water.water_category', compact('users', 'type_water', 'water_categories'));
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
        $water_category = new CategoryWater;
        $water_category->setTranslation('title', 'en', $request->title);
        $water_category->setTranslation('title', 'ar', $request->title_ar);
        $water_category->type_id = $request->type_id;
        $water_category->is_publish = $request->is_publish;
        $water_category->save();
        return redirect('admin/water-category')->with('success', 'Water Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryWater  $categoryWater
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryWater $categoryWater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryWater  $categoryWater
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type_water = TypeWater::pluck('title', 'id')->all();
        $water_category = CategoryWater::findOrFail($id);
        return view('admin.category-water.edit', compact('users', 'type_water', 'water_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryWater  $categoryWater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $water_category = CategoryWater::findOrFail($id);
        $water_category->setTranslation('title', 'en', $request->title);
        $water_category->setTranslation('title', 'ar', $request->title_ar);
        $water_category->type_id = $request->type_id;
        $water_category->is_publish = $request->is_publish;
        $water_category->update();
        return redirect('admin/water-category')->with('info', 'Water Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryWater  $categoryWater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $water_category = CategoryWater::findOrFail($request->watercat_id);
        $water_category->delete();
        return redirect('admin/water-category')->with('warning', 'Water Category has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $water_category = CategoryWater::findOrFail($request->watercat_id);
            $water_category->delete();
            return redirect('admin/water-category')->with('warning', 'Water Category has been deleted successfully');
        }
        $water_categories = CategoryWater::findOrFail($request->checkBoxArray);
        foreach ($water_categories as $water_category){
            $water_category->delete();
        }
        return redirect('admin/water-category')->with('warning', 'Water Category has been bulk deleted successfully');
    }
}
