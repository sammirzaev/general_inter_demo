<?php

namespace App\Http\Controllers;

use App\Brochures;
use App\FileManagement;
use App\FilterBrochure;
use App\User;
use Illuminate\Http\Request;

class BrochuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $users = User::all();
        $filters = FilterBrochure::pluck('filter', 'id')->all();
        $brochures = Brochures::where('brochure_name', 'like', '%'.$search.'%')->
        orWhere('title', 'like', '%'.$search.'%')->
        orWhere('description', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->paginate(10);
        return view('admin.brochure.brochures', compact('users', 'brochures', 'filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brochure = Brochures::all();
        $filters = FilterBrochure::pluck('filter', 'id');
        return view('admin.brochure.brochures', compact('brochure', 'filters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brochure = new Brochures();
        $input = $request->all();
        if($file = $request->file('picture')){
            $name = $request->brochure_name.' - '. $file->getClientOriginalName();
            $file->move('brochures-pics', $name);
            $input['picture'] = $name;
        }
        $brochure->setTranslation('brochure_name', 'en', $request->brochure_name)->setTranslation('brochure_name', 'ar', $request->brochure_name_ar);
        $brochure->is_publish = $request->is_publish;
        $brochure->filter_id = $request->filter_id;
        $brochure->setTranslation('title', 'en', $request->title)->setTranslation('title', 'ar', $request->title_ar);
        $brochure->setTranslation('description', 'en', $request->description)->setTranslation('description', 'ar', $request->description_ar);
        $brochure->picture = $name;
        $brochure->save($input);
        return redirect('admin/brochures')->with('success', 'Brochure has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brochures  $brochures
     * @return \Illuminate\Http\Response
     */
    public function show(Brochures $brochures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brochures  $brochures
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brochure = Brochures::findOrFail($id);
        $users = User::all();
        $filters = FilterBrochure::pluck('filter', 'id');
        return view('admin.brochure.edit', compact('brochure', 'users', 'filters'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brochures  $brochures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if($file = $request->file('picture')){
            $name = $request->brochure_name.' - '. $file->getClientOriginalName();
            $file->move('brochures-pics', $name);
            $input['picture'] = $name;
        }
        Brochures::findOrFail($id)
            ->setTranslation('brochure_name', 'en', $request->brochure_name)
            ->setTranslation('brochure_name', 'ar', $request->brochure_name_ar)
            ->setTranslation('title', 'en', $request->title)
            ->setTranslation('title', 'ar', $request->title_ar)
            ->setTranslation('description', 'en', $request->description)
            ->setTranslation('description', 'ar', $request->description_ar)
            ->update($input);
        return redirect('admin/brochures')->with('info', 'Brochure has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brochures  $brochures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $brochure = Brochures::findOrFail($request->brochure_id);
        if(!empty($brochure->picture)) {
            if (file_exists(public_path('brochures-pics/'. $brochure->picture))) {
                unlink(public_path('brochures-pics/'. $brochure->picture));
            }
        }
        $brochure->delete();
        return redirect('admin/brochures')->with('warning', 'Brochure has been deleted successfully');
    }

    public function deleteAll(Request $request)
    {
        if (isset($request->delete_single)){
            $brochure = Brochures::findOrFail($request->brochure_id);
            if(!empty($brochure->file)) {
                if (file_exists(public_path('brochures-pics/'. $brochure->file))) {
                    unlink(public_path('brochures-pics/'. $brochure->file));
                }
            }
            $brochure->delete();
            return redirect('admin/brochures')->with('warning', 'Brochure has been deleted successfully');
        }
        $brochures = Brochures::findOrFail($request->checkBoxArray);
        foreach ($brochures as $brochure)
        {
            if(!empty($brochure->file)) {
                if (file_exists(public_path('brochures-pics/'. $brochure->file))) {
                    unlink(public_path('brochures-pics/'. $brochure->file));
                }
            }
            $brochure->delete();
        }
        return redirect('admin/brochures')->with('warning', 'Brochure has been deleted with bulk action successfully');
    }
}
