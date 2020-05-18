<?php

namespace App\Http\Controllers;

use App\Footer;
use App\User;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $footer_titles = Footer::all();
        return view('admin.footer-title.footer_title', compact('users', 'footer_titles'));
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
        $footer_title = new Footer;
        $footer_title->setTranslation('footer_title', 'en', $request->footer_title);
        $footer_title->setTranslation('footer_title', 'ar', $request->footer_title_ar);
        $footer_title->is_publish = $request->is_publish;
        $footer_title->save();
        return redirect('admin/footer-title')->with('success', 'Footer Title has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $footer_title = Footer::findOrFail($id);
        return view('admin.footer-title.edit', compact('users', 'footer_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $footer_title = Footer::findOrFail($id);
        $footer_title->setTranslation('footer_title', 'en', $request->footer_title);
        $footer_title->setTranslation('footer_title', 'ar', $request->footer_title_ar);
        $footer_title->is_publish = $request->is_publish;
        $footer_title->update();
        return redirect('admin/footer-title')->with('info', 'Footer Title has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $footer_title = Footer::findOrFail($request->footert_id);
        $footer_title->delete();
        return redirect('admin/footer-title')->with('warning', 'Footer Title has been deleted successfully');
    }

}
