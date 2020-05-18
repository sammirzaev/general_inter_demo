<?php

namespace App\Http\Controllers;

use App\ContactRequest;
use App\User;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $contact_requests = ContactRequest::all();
        return view('admin.contact-requests.contact_request', compact('users', 'contact_requests'));
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
        $contact_request = new ContactRequest;
        $contact_request->setTranslation('sales_title', 'en', $request->sales_title);
        $contact_request->setTranslation('sales_title', 'ar', $request->sales_title_ar);
        $contact_request->setTranslation('support_title', 'en', $request->support_title);
        $contact_request->setTranslation('support_title', 'ar', $request->support_title_ar);
        $contact_request->setTranslation('career_title', 'en', $request->career_title);
        $contact_request->setTranslation('career_title', 'ar', $request->career_title_ar);
        $contact_request->is_publish = $request->is_publish;
        $contact_request->save();
        return redirect('admin/contact-request')->with('success', 'ContactDetails Request has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactRequest  $contactRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ContactRequest $contactRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactRequest  $contactRequest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $contact_request = ContactRequest::findOrFail($id);
        return view('admin.contact-requests.edit', compact('users', 'contact_request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactRequest  $contactRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact_request = ContactRequest::findOrFail($id);
        $contact_request->setTranslation('sales_title', 'en', $request->sales_title);
        $contact_request->setTranslation('sales_title', 'ar', $request->sales_title_ar);
        $contact_request->setTranslation('support_title', 'en', $request->support_title);
        $contact_request->setTranslation('support_title', 'ar', $request->support_title_ar);
        $contact_request->setTranslation('career_title', 'en', $request->career_title);
        $contact_request->setTranslation('career_title', 'ar', $request->career_title_ar);
        $contact_request->is_publish = $request->is_publish;
        $contact_request->update();
        return redirect('admin/contact-request')->with('info', 'ContactDetails Request has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactRequest  $contactRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contact_request = ContactRequest::findOrFail($request->contactr_id);
        $contact_request->delete();
        return redirect('admin/contact-request')->with('warning', 'ContactDetails Request has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $contact_request = ContactRequest::findOrFail($request->contactr_id);
            $contact_request->delete();
            return redirect('admin/contact-request')->with('warning', 'ContactDetails Request has been deleted successfully');
        }
        $contact_requests = ContactRequest::findOrFail($request->checkBoxArray);
        foreach ($contact_requests as $contact_request){
            $contact_request->delete();
        }
        return redirect('admin/contact-request')->with('warning', 'ContactDetails Request has been bulk deleted successfully');
    }
}
