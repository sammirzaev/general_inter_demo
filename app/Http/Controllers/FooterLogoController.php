<?php

namespace App\Http\Controllers;

use App\FooterLogo;
use App\User;
use Illuminate\Http\Request;

class FooterLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $footer_logos = FooterLogo::all();
        return view('admin.footer-logo.footer_logo', compact('users', 'footer_logos'));
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
        $footer_logo = new FooterLogo;
        $input = $request->all();
        if ($file = $request->file('logo')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('brands', $name);
            $input['logo'] = $name;
        }
        $footer_logo->setTranslation('title', 'en', $request->title);
        $footer_logo->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('logo')){
            $footer_logo->logo = $name;
        } else {
            $footer_logo->logo = null;
        }
        $footer_logo->is_publish = $request->is_publish;
        $footer_logo->save();
        return redirect('admin/footer-logo')->with('success', 'Footer Logo has benn created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FooterLogo  $footerLogo
     * @return \Illuminate\Http\Response
     */
    public function show(FooterLogo $footerLogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FooterLogo  $footerLogo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $footer_logo = FooterLogo::findOrFail($id);
        return view('admin.footer-logo.edit', compact('users', 'footer_logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FooterLogo  $footerLogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('logo')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('brands', $name);
            $input['logo'] = $name;
        }
        $footer_logo = FooterLogo::findOrFail($id);
        $footer_logo->setTranslation('title', 'en', $request->title);
        $footer_logo->setTranslation('title', 'ar', $request->title_ar);
        $footer_logo->is_publish = $request->is_publish;
        $footer_logo->update($input);
        return redirect('admin/footer-logo')->with('info', 'Footer Logo has benn updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FooterLogo  $footerLogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $footer_logo = FooterLogo::findOrFail($request->footerl_id);
        if (!empty($footer_logo->logo)){
            if (file_exists(public_path('brands/'.$footer_logo->logo))){
                unlink(public_path('brands/'.$footer_logo->logo));
            }
        }
        $footer_logo->delete();
        return redirect('admin/footer-logo')->with('warning', 'Footer Logo has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $footer_logo = FooterLogo::findOrFail($request->footerl_id);
            if (!empty($footer_logo->logo)){
                if (file_exists(public_path('brands/'.$footer_logo->logo))){
                    unlink(public_path('brands/'.$footer_logo->logo));
                }
            }
            $footer_logo->delete();
            return redirect('admin/footer-logo')->with('warning', 'Footer Logo has been deleted successfully');
        }
        $footer_logos = FooterLogo::findOrFail($request->checkBoxArray);
        foreach ($footer_logos as $footer_logo){
            if (!empty($footer_logo->logo)){
                if (file_exists(public_path('brands/'.$footer_logo->logo))){
                    unlink(public_path('brands/'.$footer_logo->logo));
                }
            }
            $footer_logo->delete();
        }
        return redirect('admin/footer-logo')->with('warning', 'Footer Logo has been bulk deleted successfully');
    }
}
