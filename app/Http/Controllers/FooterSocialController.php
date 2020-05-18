<?php

namespace App\Http\Controllers;

use App\FooterSocial;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class FooterSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $footer_socials = FooterSocial::all();
        return view('admin.footer-social.footer_social', compact('users', 'footer_socials'));
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
        $footer_social = new FooterSocial;
        $footer_social->setTranslation('title', 'en', $request->title);
        $footer_social->setTranslation('title', 'ar', $request->title_ar);
        $footer_social->class = $request->class;
        $footer_social->icon = $request->icon;
        $footer_social->link = $request->link;
        $footer_social->is_publish = $request->is_publish;
        $footer_social->save();
        return redirect('admin/footer-social')->with('success', 'Footer Social has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FooterSocial  $footerSocial
     * @return \Illuminate\Http\Response
     */
    public function show(FooterSocial $footerSocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FooterSocial  $footerSocial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $footer_social = FooterSocial::findOrFail($id);
        return view('admin.footer-social.edit', compact('users', 'footer_social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FooterSocial  $footerSocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $footer_social = FooterSocial::findORFail($id);
        $footer_social->setTranslation('title', 'en', $request->title);
        $footer_social->setTranslation('title', 'ar', $request->title_ar);
        $footer_social->class = $request->class;
        $footer_social->icon = $request->icon;
        $footer_social->link = $request->link;
        $footer_social->is_publish = $request->is_publish;
        $footer_social->update();
        return redirect('admin/footer-social')->with('info', 'Footer Social has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FooterSocial  $footerSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $footer_social = FooterSocial::findOrFail($request->footersoc_id);
        $footer_social->delete();
        return redirect('admin/footer-social')->with('warning', 'Footer Social has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $footer_social = FooterSocial::findOrFail($request->footersoc_id);
            $footer_social->delete();
            return redirect('admin/footer-social')->with('warning', 'Footer Social has been deleted successfully');
        }
        $footer_socials = FooterSocial::findOrFail($request->checkBoxArray);
        foreach ($footer_socials as $footer_social){
            $footer_social->delete();
        }
        return redirect('admin/footer-social')->with('warning', 'Footer Social has been bulk deleted successfully');
    }
}
