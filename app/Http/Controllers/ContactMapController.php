<?php

namespace App\Http\Controllers;

use App\ContactMap;
use App\User;
use Illuminate\Http\Request;

class ContactMapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $contact_maps = ContactMap::all();
        return view('admin.contact-map.contact_map', compact('users', 'contact_maps'));
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
        $contact_map = new ContactMap;
        $contact_map->setTranslation('open_title', 'en', $request->open_title);
        $contact_map->setTranslation('open_title', 'ar', $request->open_title_ar);
        $contact_map->setTranslation('close_title', 'en', $request->close_title);
        $contact_map->setTranslation('close_title', 'ar', $request->close_title_ar);
        $contact_map->icon = $request->icon;
        $contact_map->link = $request->link;
        $contact_map->is_publish = $request->is_publish;
        $contact_map->save();
        return redirect('admin/contact-map')->with('success', 'Contact Map has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMap $contactMap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $contact_map = ContactMap::findOrFail($id);
        return view('admin.contact-map.edit', compact('users', 'contact_map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact_map = ContactMap::findOrFail($id);
        $contact_map->setTranslation('open_title', 'en', $request->open_title);
        $contact_map->setTranslation('open_title', 'ar', $request->open_title_ar);
        $contact_map->setTranslation('close_title', 'en', $request->close_title);
        $contact_map->setTranslation('close_title', 'ar', $request->close_title_ar);
        $contact_map->icon = $request->icon;
        $contact_map->link = $request->link;
        $contact_map->is_publish = $request->is_publish;
        $contact_map->update();
        return redirect('admin/contact-map')->with('info', 'Contact Map has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contact_map = ContactMap::findOrFail($request->contactmap_id);
        $contact_map->delete();
        return redirect('admin/contact-map')->with('warning', 'Contact Map has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $contact_map = ContactMap::findOrFail($request->contactmap_id);
            $contact_map->delete();
            return redirect('admin/contact-map')->with('warning', 'Contact Map has been deleted successfully');
        }
        $contact_maps = ContactMap::findOrFail($request->checkBoxArray);
        foreach ($contact_maps as $contact_map){
            $contact_map->delete();
        }
        return redirect('admin/contact-map')->with('warning', 'Contact Map has been bulk deleted successfully');
    }
}
