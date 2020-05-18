<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\User;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $testimonials = Testimonial::all();
        return view('admin.testimonial.testimonial', compact('users', 'testimonials'));
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
        $testimonial = new Testimonial;
        $testimonial->setTranslation('title', 'en', $request->title);
        $testimonial->setTranslation('title', 'ar', $request->title_ar);
        $testimonial->setTranslation('description', 'en', $request->description);
        $testimonial->setTranslation('description', 'ar', $request->description_ar);
        $testimonial->setTranslation('footer', 'en', $request->footer);
        $testimonial->setTranslation('footer', 'ar', $request->footer_ar);
        $testimonial->is_publish = $request->is_publish;
        $testimonial->save();
        return redirect('admin/testimonial')->with('success', 'Testimonial has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('users', 'testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->setTranslation('title', 'en', $request->title);
        $testimonial->setTranslation('title', 'ar', $request->title_ar);
        $testimonial->setTranslation('description', 'en', $request->description);
        $testimonial->setTranslation('description', 'ar', $request->description_ar);
        $testimonial->setTranslation('footer', 'en', $request->footer);
        $testimonial->setTranslation('footer', 'ar', $request->footer_ar);
        $testimonial->is_publish = $request->is_publish;
        $testimonial->update();
        return redirect('admin/testimonial')->with('info', 'Testimonial has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->testimonial_id);
        $testimonial->delete();
        return redirect('admin/testimonial')->with('warning', 'Testimonial has been deleted successfully');
    }

    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $testimonial = Testimonial::findOrFail($request->testimonial_id);
            $testimonial->delete();
            return redirect('admin/testimonial')->with('warning', 'Testimonial has been deleted successfully');
        }

        $testimonials = Testimonial::findOrFail($request->checkBoxArray);
        foreach ($testimonials as $testimonial){
            $testimonial->delete();
        }
        return redirect('admin/testimonial')->with('warning', 'Testimonial has been bulk deleted successfully');
    }
}
