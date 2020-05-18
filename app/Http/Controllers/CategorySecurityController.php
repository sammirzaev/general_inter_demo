<?php

namespace App\Http\Controllers;

use App\CategorySecurity;
use App\TypeSecurity;
use App\User;
use Illuminate\Http\Request;

class CategorySecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $type_security = TypeSecurity::pluck('title', 'id')->all();
        $security_categories = CategorySecurity::all();
        return view('admin.category-security.security_category', compact('users', 'type_security', 'security_categories'));
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
        $security_category = new CategorySecurity;
        $security_category->setTranslation('title', 'en', $request->title);
        $security_category->setTranslation('title', 'ar', $request->title_ar);
        $security_category->type_id = $request->type_id;
        $security_category->is_publish = $request->is_publish;
        $security_category->save();
        return redirect('admin/security-category')->with('success', 'Security Category has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategorySecurity  $categorySecurity
     * @return \Illuminate\Http\Response
     */
    public function show(CategorySecurity $categorySecurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategorySecurity  $categorySecurity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $type_security = TypeSecurity::pluck('title', 'id')->all();
        $security_category = CategorySecurity::findOrFail($id);
        return view('admin.category-security.edit', compact('users', 'type_security', 'security_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategorySecurity  $categorySecurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $security_category = CategorySecurity::findOrFail($id);
        $security_category->setTranslation('title', 'en', $request->title);
        $security_category->setTranslation('title', 'ar', $request->title_ar);
        $security_category->type_id = $request->type_id;
        $security_category->is_publish = $request->is_publish;
        $security_category->update();
        return redirect('admin/security-category')->with('info', 'Security Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategorySecurity  $categorySecurity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $security_category = CategorySecurity::findOrFail($request->securitycat_id);
        $security_category->delete();
        return redirect('admin/security-category')->with('warning', 'Security Category has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $security_category = CategorySecurity::findOrFail($request->securitycat_id);
            $security_category->delete();
            return redirect('admin/security-category')->with('warning', 'Security Category has been deleted successfully');
        }
        $security_categories = CategorySecurity::findOrFail($request->checkBoxArray);
        foreach ($security_categories as $security_category){
            $security_category->delete();
        }
        return redirect('admin/security-category')->with('warning', 'Security Category has been bulk deleted successfully');
    }
}
