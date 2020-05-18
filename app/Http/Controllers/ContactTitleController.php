<?php

namespace App\Http\Controllers;

use App\ContactTitle;
use App\User;
use Illuminate\Http\Request;

class ContactTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $contact_titles = ContactTitle::all();
        return view('admin.contact-title.contact_title', compact('users', 'contact_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact_titles = ContactTitle::all();
        return view('admin.contact-title.contact_title', compact('users', 'contact_titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact_title = new ContactTitle;
        $contact_title->setTranslation('title', 'en', $request->title);
        $contact_title->setTranslation('title', 'ar', $request->title_ar);
        $contact_title->is_publish = $request->is_publish;
        $contact_title->save();
        return redirect('admin/contact-title')->with('success', 'ContactDetails Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactTitle  $contactTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ContactTitle $contactTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactTitle  $contactTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $contact_title = ContactTitle::findOrFail($id);
        return view('admin.contact-title.edit', compact('users', 'contact_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactTitle  $contactTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact_title = ContactTitle::fidnOrFail($id);
        $contact_title->setTranslation('title', 'en', $request->title);
        $contact_title->setTranslation('title', 'ar', $request->title_ar);
        $contact_title->is_publish = $request->is_publish;
        $contact_title->update();
        return redirect('admin/contact-title')->with('info', 'ContactDetails Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactTitle  $contactTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contact_title = ContactTitle::findOrFail($request->contacttitle_id);
        $contact_title->delete();
        return redirect('admin/contact-title')->with('warning', 'ContactDetails Title has been deleted successfully');
    }
}
