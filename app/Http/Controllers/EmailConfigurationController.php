<?php

namespace App\Http\Controllers;

use App\EmailConfiguration;
use App\User;
use Illuminate\Http\Request;

class EmailConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $email_configs = EmailConfiguration::all();
        return view('admin.email_config.email_configs', compact('users', 'email_configs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email_configs = EmailConfiguration::all();
        return view('admin.email_config.email_configs', compact('email_configs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = new EmailConfiguration();
        $email->hr_email = $request->hr_email;
        $email->career_email = $request->career_email;
        $email->contact_email = $request->contact_email;
        $email->admin_email = $request->admin_email;
        $email->is_publish = $request->is_publish;
        $email->save();
        return redirect('admin/email-configuration')->with('success', 'Emails has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmailConfiguration  $emailConfiguration
     * @return \Illuminate\Http\Response
     */
    public function show(EmailConfiguration $emailConfiguration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmailConfiguration  $emailConfiguration
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $email_config = EmailConfiguration::findOrFail($id);
        $users = User::all();
        return view('admin.email_config.edit', compact('email_config', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmailConfiguration  $emailConfiguration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $email = EmailConfiguration::findOrFail($id);
        $email->hr_email = $request->hr_email;
        $email->career_email = $request->career_email;
        $email->contact_email = $request->contact_email;
        $email->admin_email = $request->admin_email;
        $email->is_publish = $request->is_publish;
        $email->update();
        return redirect('admin/email-configuration')->with('info', 'Emails has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmailConfiguration  $emailConfiguration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $email_config = EmailConfiguration::findOrFail($request->email_id);
        $email_config->delete();
        return redirect('admin/email-configuration')->with('warning', 'Emails has been deleted successfully');
    }
}
