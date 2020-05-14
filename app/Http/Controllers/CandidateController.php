<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\JobCareers;
use App\JobCategory;
use App\Mail\Career;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller
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
        $jobs = JobCareers::all('job_name', 'id');
        $candidates = Candidate::where('name', 'like', '%'.$search.'%')->
        orWhere('email', 'like', '%'.$search.'%')->
        orWhere('phone', 'like', '%'.$search.'%')->
        orWhere('subject', 'like', '%'.$search.'%')->
        orderBy('id', 'DESC')->paginate(30);
        return view('admin.candidate.candidate', compact('users', 'candidates', 'jobs'));
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
//        $request->validate([
//            'file' => 'required|file|max:1024',
//        ]);
//        $input = $request->all();
//        if($file = $request->file('file')){
//            $name = time().$file->getClientOriginalName();
//            $file->move('resume', $name);
//            $input['file'] = $name;
//        }
//
//        $candidate = new Candidate();
//        $candidate->position = $request->position;
//        $candidate->name     = $request->name;
//        $candidate->email    = $request->email;
//        $candidate->phone    = $request->phone;
//        $candidate->subject  = $request->subject;
//        $candidate->letter   = $request->description;
//        $candidate->file     = $name;
//        if($candidate->save())
//        {
//            $data = array(
//                'position'=>$candidate->position,
//                'name'=>$candidate->name,
//                'email'=> $candidate->email,
//                'file'=> $candidate->file,
//                'phone'=> $candidate->phone,
//            );
//            Mail::to($candidate->email)->bcc(['samandarmirzayev@gmail.com', 's.mirzayev@9yards.ae'])
//                ->send(new Career($data));
//        }
//        return redirect('/careers')->with('success', 'Thank you for applying fo this job!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
            $candidate = Candidate::findOrFail($request->candidate_id);
            if(!empty($candidate->file)) {
                if (file_exists(public_path('resume/'. $candidate->file))) {
                    unlink(public_path('resume/'. $candidate->file));
                }
            }
            $candidate->delete();
    }

    public function deleteAll(Request $request)
    {
        if (isset($request->delete_single)){
            $candidate = Candidate::findOrFail($request->candidate_id);
            if(!empty($candidate->file)) {
                if (file_exists(public_path('resume/'. $candidate->file))) {
                    unlink(public_path('resume/'. $candidate->file));
                }
            }
            $candidate->delete();
            return redirect('admin/candidate')->with('warning', 'Candidate has been deleted successfully');
        }
        $candidates = Candidate::findOrFail($request->checkBoxArray);
        foreach ($candidates as $candidate)
        {
            if(!empty($candidate->file)) {
                if (file_exists(public_path('resume/'. $candidate->file))) {
                    unlink(public_path('resume/'. $candidate->file));
                }
            }
            $candidate->delete();
        }
        return redirect('admin/candidate')->with('warning', 'Candidate has been deleted with bulk action successfully');
    }
}
