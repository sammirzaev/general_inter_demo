<?php

namespace App\Http\Controllers;

use App\TypeWater;
use App\User;
use App\WaterTitle;
use Illuminate\Http\Request;

class TypeWaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $water_types = TypeWater::all();
        return view('admin.type-water.water_type', compact('users', 'water_types'));
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
        $water_type = new TypeWater;
        $water_type->setTranslation('title', 'en', $request->title);
        $water_type->setTranslation('title', 'ar', $request->title_ar);
        $water_type->icon = $request->icon;
        $water_type->is_publish = $request->is_publish;
        $water_type->save();
        return redirect('admin/water-type')->with('success', 'Water Type has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeWater  $typeWater
     * @return \Illuminate\Http\Response
     */
    public function show(TypeWater $typeWater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeWater  $typeWater
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $water_type = TypeWater::findOrFail($id);
        return view('admin.type-water.edit', compact('users', 'water_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeWater  $typeWater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $water_type = TypeWater::findOrFail($id);
        $water_type->setTranslation('title', 'en', $request->title);
        $water_type->setTranslation('title', 'ar', $request->title_ar);
        $water_type->icon = $request->icon;
        $water_type->is_publish = $request->is_publish;
        $water_type->update();
        return redirect('admin/water-type')->with('info', 'Water Type has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeWater  $typeWater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $water_type = TypeWater::findOrFail($request->watertype_id);
        $water_type->delete();
        return redirect('admin/water-type')->with('warning', 'Water Type has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $water_type = TypeWater::findOrFail($request->watertype_id);
            $water_type->delete();
            return redirect('admin/water-type')->with('warning', 'Water Type has been deleted successfully');
        }
        $water_types = TypeWater::findOrFail($request->checkBoxArray);
        foreach ($water_types as $water_type){
            $water_type->delete();
        }
        return redirect('admin/water-type')->with('warning', 'Water Type has been bulk deleted successfully');
    }
}
