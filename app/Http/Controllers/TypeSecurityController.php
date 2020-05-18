<?php

namespace App\Http\Controllers;

use App\TypeSecurity;
use App\User;
use Illuminate\Http\Request;

class TypeSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $security_types = TypeSecurity::all();
        return view('admin.type-security.security_type', compact('users', 'security_types'));
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
        $security_type = new TypeSecurity;
        $security_type->setTranslation('title', 'en', $request->title);
        $security_type->setTranslation('title', 'ar', $request->title_ar);
        $security_type->icon = $request->icon;
        $security_type->is_publish = $request->is_publish;
        $security_type->save();
        return redirect('admin/security-type')->with('success', "Security Type has been created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeSecurity  $typeSecurity
     * @return \Illuminate\Http\Response
     */
    public function show(TypeSecurity $typeSecurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeSecurity  $typeSecurity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $security_type = TypeSecurity::findOrFail($id);
        return view('admin.type-security.edit', compact('users', 'security_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeSecurity  $typeSecurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $security_type = TypeSecurity::findOrFail($id);
        $security_type->setTranslation('title', 'en', $request->title);
        $security_type->setTranslation('title', 'ar', $request->title_ar);
        $security_type->icon = $request->icon;
        $security_type->is_publish = $request->is_publish;
        $security_type->update();
        return redirect('admin/security-type')->with('info', "Security Type has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeSecurity  $typeSecurity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $security_type = TypeSecurity::findOrFail($request->securitytype_id);
        $security_type->delete();
        return redirect('admin/security-type')->with('warning', "Security Type has been deleted successfully");
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $security_type = TypeSecurity::findOrFail($request->securitytype_id);
            $security_type->delete();
            return redirect('admin/security-type')->with('warning', "Security Type has been deleted successfully");
        }
        $security_types = TypeSecurity::findOrFail($request->checkBoxArray);
        foreach ($security_types as $security_type){
            $security_type->delete();
        }
        return redirect('admin/security-type')->with('warning', "Security Type has been bulk deleted successfully");
    }
}
