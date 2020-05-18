<?php

namespace App\Http\Controllers;

use App\ContactHeader;
use App\User;
use Illuminate\Http\Request;

class ContactHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $contact_headers = ContactHeader::all();
        return view('admin.contact-header.contact_header', compact('users', 'contact_headers'));
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
        $contact_header = new ContactHeader;
        $contact_header->setTranslation('title', 'en', $request->title);
        $contact_header->setTranslation('title', 'ar', $request->title_ar);
        $contact_header->is_publish = $request->is_publish;
        $contact_header->save();
        return redirect('admin/contact-header')->with('success', 'ContactDetails header has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactHeader  $contactHeader
     * @return \Illuminate\Http\Response
     */
    public function show(ContactHeader $contactHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactHeader  $contactHeader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $contact_header = ContactHeader::findOrFail($id);
        return view('admin.contact-header.edit', compact('users', 'contact_header'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactHeader  $contactHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact_header = ContactHeader::findOrFail($id);
        $contact_header->setTranslation('title', 'en', $request->title);
        $contact_header->setTranslation('title', 'ar', $request->title_ar);
        $contact_header->is_publish = $request->is_publish;
        $contact_header->update();
        return redirect('admin/contact-header')->with('info', 'ContactDetails header has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactHeader  $contactHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contact_header = ContactHeader::findOrFail($request->contacth_id);
        $contact_header->delete();
        return redirect('admin/contact-header')->with('warning', 'ContactDetails header has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $contact_header = ContactHeader::findOrFail($request->contacth_id);
            $contact_header->delete();
            return redirect('admin/contact-header')->with('warning', 'ContactDetails header has been deleted successfully');
        }
        $contact_headers = ContactHeader::findOrFail($request->checkBoxArray);
        foreach ($contact_headers as $contact_header){
            $contact_header->delete();
        }
        return redirect('admin/contact-header')->with('warning', 'ContactDetails header has been bulk deleted successfully');
    }
}
