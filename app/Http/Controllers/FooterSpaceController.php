<?php

namespace App\Http\Controllers;

use App\FooterSpace;
use App\User;
use Illuminate\Http\Request;

class FooterSpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $footer_spaces = FooterSpace::all();
        return view('admin.footer-space.footer_space', compact('users', 'footer_spaces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footer_space = FooterSpace::all();
        return view('admin.footer-space.footer_space', compact('footer_space'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FooterSpace::create($request->all());
        return redirect('admin/footer-space')->with('success', 'Footer Input has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FooterSpace  $footerSpace
     * @return \Illuminate\Http\Response
     */
    public function show(FooterSpace $footerSpace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FooterSpace  $footerSpace
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer_space = FooterSpace::findOrFail($id);
        $users = User::all();
        return view('admin.footer-space.edit', compact('users', 'footer_space'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FooterSpace  $footerSpace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        FooterSpace::whereId($id)->first()->update($request->all());
        return redirect('admin/footer-space')->with('info', 'Footer Input has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FooterSpace  $footerSpace
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $footer_space = FooterSpace::findOrFail($request->footer_id);
        $footer_space->delete();
        return redirect('admin/footer-space')->with('warning', 'Footer Input has been deleted successfully');
    }
}
