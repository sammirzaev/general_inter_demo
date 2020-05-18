<?php

namespace App\Http\Controllers;

use App\TypeFire;
use App\User;
use Illuminate\Http\Request;

class TypeFireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $fire_types = TypeFire::all();
        return view('admin.type-fire.fire_type', compact('users', 'fire_types'));
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
        $fire_type = new TypeFire;
        $fire_type->setTranslation('title', 'en', $request->title);
        $fire_type->setTranslation('title', 'ar', $request->title_ar);
        $fire_type->icon = $request->icon;
        $fire_type->is_publish = $request->is_publish;
        $fire_type->save();
        return redirect('admin/fire-type')->with('Fire Type has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeFire  $typeFire
     * @return \Illuminate\Http\Response
     */
    public function show(TypeFire $typeFire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeFire  $typeFire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $fire_type = TypeFire::findOrFail($id);
        return view('admin.type-fire.edit', compact('users', 'fire_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeFire  $typeFire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fire_type = TypeFire::findOrFail($id);
        $fire_type->setTranslation('title', 'en', $request->title);
        $fire_type->setTranslation('title', 'ar', $request->title_ar);
        $fire_type->icon = $request->icon;
        $fire_type->is_publish = $request->is_publish;
        $fire_type->update();
        return redirect('admin/fire-type')->with('info', 'Fire Type has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeFire  $typeFire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $fire_type = TypeFire::findOrFail($request->firetype_id);
        $fire_type->delete();
        return redirect('admin/fire-type')->with('warning', 'Fire Type has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $fire_type = TypeFire::findOrFail($request->firetype_id);
            $fire_type->delete();
            return redirect('admin/fire-type')->with('warning', 'Fire Type has been deleted successfully');
        }
        $fire_types = TypeFire::findOrFail($request->checkBoxArray);
        foreach ($fire_types as $fire_type){
            $fire_type->delete();
        }
        return redirect('admin/fire-type')->with('warning', 'Fire Type has been bulk deleted successfully');
    }
}
