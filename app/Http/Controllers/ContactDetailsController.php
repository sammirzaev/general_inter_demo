<?php

namespace App\Http\Controllers;

use App\ContactDetails;
use App\User;
use Illuminate\Http\Request;

class ContactDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $contacts = ContactDetails::all();
        return view('admin.contact.contact', compact('users', 'contacts'));
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
        $contact = new ContactDetails;
        $contact->setTranslation('phone_title', 'en', $request->phone_title);
        $contact->setTranslation('phone_title', 'ar', $request->phone_title_ar);
        $contact->setTranslation('address_title', 'en', $request->address_title);
        $contact->setTranslation('address_title', 'ar', $request->address_title_ar);
        $contact->setTranslation('email_title', 'en', $request->email_title);
        $contact->setTranslation('email_title', 'ar', $request->email_title_ar);
        $contact->setTranslation('address', 'en', $request->address);
        $contact->setTranslation('address', 'ar', $request->address_ar);
        $contact->phone_icon = $request->phone_icon;
        $contact->address_icon = $request->address_icon;
        $contact->email_icon = $request->email_icon;
        $contact->phone = $request->phone;
        $contact->fax = $request->fax;
        $contact->email = $request->email;
        $contact->is_publish = $request->is_publish;
        $contact->save();
        return redirect('admin/contact-details')->with('success', 'ContactDetails Details has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactDetails  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(ContactDetails $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactDetails  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $contact = ContactDetails::findOrFail($id);
        return view('admin.contact.edit', compact('users', 'contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactDetails  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = ContactDetails::findOrFail($id);
        $contact->setTranslation('phone_title', 'en', $request->phone_title);
        $contact->setTranslation('phone_title', 'ar', $request->phone_title_ar);
        $contact->setTranslation('address_title', 'en', $request->address_title);
        $contact->setTranslation('address_title', 'ar', $request->address_title_ar);
        $contact->setTranslation('email_title', 'en', $request->email_title);
        $contact->setTranslation('email_title', 'ar', $request->email_title_ar);
        $contact->setTranslation('address', 'en', $request->address);
        $contact->setTranslation('address', 'ar', $request->address_ar);
        $contact->phone_icon = $request->phone_icon;
        $contact->address_icon = $request->address_icon;
        $contact->email_icon = $request->email_icon;
        $contact->phone = $request->phone;
        $contact->fax = $request->fax;
        $contact->email = $request->email;
        $contact->is_publish = $request->is_publish;
        $contact->update();
        return redirect('admin/contact-details')->with('info', 'ContactDetails Details has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactDetails  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contact = ContactDetails::findOrFail($request->contactd_id);
        $contact->delete();
        return redirect('admin/contact-details')->with('warning', 'ContactDetails Details has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $contact = ContactDetails::findOrFail($request->contactd_id);
            $contact->delete();
            return redirect('admin/contact-details')->with('warning', 'ContactDetails Details has been deleted successfully');
        }
        $contacts = ContactDetails::findOrFail($request->checkBoxArray);
        foreach ($contacts as $contact){
            $contact->delete();
        }
        return redirect('admin/contact-details')->with('warning', 'ContactDetails Details has been bulk deleted successfully');
    }
}
