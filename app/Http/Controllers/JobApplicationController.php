<?php

namespace App\Models;
namespace App;
namespace App\Http\Controllers;
use App\Models\JobApplication;
use App\Models\Applicant;
use App\Job;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.singlejob');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.singlejob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $job = JobApplication::find($id);
        $applicantId = Auth::user()->applicant->id;
        $job->applicants()->attach($applicantId);
        
        $request->session()->flash('success', 'Job edited successfully. Please wait for your confirmation');
        return redirect()->back();
       
    }

    public function getAllApplicants()
    {
         $jobs = DB::table('job_applications')->get();
        // $jobs = DB::table('job_applications')->where('id',$jobs->jobs_id)->value('company_name');
        return view('pages.job_applicants',compact('jobs'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
