<?php

namespace App\Http\Controllers;

use App\CaseCategory;
use App\CaseMedia;
use App\CaseStudy;
use App\User;
use Cassandra\Exception\ServerException;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class CaseMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $case_cat = CaseCategory::pluck('title', 'id')->all();
        $case_study = CaseStudy::pluck('title', 'id')->all();
        $case_medias = CaseMedia::all();
        return view('admin.case-media.case_media', compact('users', 'case_cat', 'case_study', 'case_medias'));
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
        $case_media = new CaseMedia;
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('study-media', $name);
            $input['media'] = $name;
        }
        $case_media->setTranslation('title', 'en', $request->title);
        $case_media->setTranslation('title', 'ar', $request->title_ar);
        if ($request->file('media')){
            $case_media->media = $name;
        } else {
            $case_media->media = null;
        }
        $case_media->cat_id = $request->cat_id;
        $case_media->case_id = $request->case_id;
        $case_media->is_publish = $request->is_publish;
        $case_media->save();
        return redirect('admin/case-media')->with('success', 'Case Media has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaseMedia  $caseMedia
     * @return \Illuminate\Http\Response
     */
    public function show(CaseMedia $caseMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseMedia  $caseMedia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $case_cat = CaseCategory::pluck('title', 'id')->all();
        $case_study = CaseStudy::pluck('title', 'id')->all();
        $case_media = CaseMedia::findOrFail($id);
        return view('admin.case-media.edit', compact('users', 'case_cat', 'case_study', 'case_media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaseMedia  $caseMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($file = $request->file('media')){
            $name = time().'-'.$file->getClientOriginalName();
            $file->storeAs('study-media', $name);
            $input['media'] = $name;
        }
        $case_media = CaseMedia::findOrFail($id);
        $case_media->setTranslation('title', 'en', $request->title);
        $case_media->setTranslation('title', 'ar', $request->title_ar);
        $case_media->cat_id = $request->cat_id;
        $case_media->case_id = $request->case_id;
        $case_media->is_publish = $request->is_publish;
        $case_media->update($input);
        return redirect('admin/case-media')->with('info', 'Case Media has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaseMedia  $caseMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $case_media = CaseMedia::findOrFail($request->cmedia_id);
        if (!empty($case_media->media)){
            if (file_exists(public_path('study-media/'.$case_media->media))){
                unlink(public_path('study-media/'.$case_media->media));
            }
        }
        $case_media->delete();
        return redirect('admin/case-media')->with('warning', 'Case Media has been deleted successfully');
    }
    public function deleteAll(Request $request){
        if (isset($request->delete_single)){
            $case_media = CaseMedia::findOrFail($request->cmedia_id);
            if (!empty($case_media->media)){
                if (file_exists(public_path('study-media/'.$case_media->media))){
                    unlink(public_path('study-media/'.$case_media->media));
                }
            }
            $case_media->delete();
            return redirect('admin/case-media')->with('warning', 'Case Media has been deleted successfully');
        }

        $case_medias = CaseMedia::findOrFail($request->checkBoxArray);
        foreach ($case_medias as $case_media){
            if (!empty($case_media->media)){
                if (file_exists(public_path('study-media/'.$case_media->media))){
                    unlink(public_path('study-media/'.$case_media->media));
                }
            }
            $case_media->delete();
        }
        return redirect('admin/case-media')->with('warning', 'Case Media has been bulk deleted successfully');
    }
}
