<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\User;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ManageJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.managejobs');
    }

    
    public function getAllJobs()
    {
        $jobs = Auth::user()->jobs;
        return view('pages.managejobs',compact('jobs'));
    }


    
    public function jobs($id)
    {
        $jobs = DB::table('jobs')->where('id',$id)->first();
        return view('pages.editjob',compact('jobs'));
    }

    public function deletepost($id)
    {
        DB::table('jobs')->where('id',$id)->delete();
        return back()->with('post deleted','post deleted successfully');
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
        //
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
    public function update(Request $request)
    {
       DB::table('jobs')->where('id',$request->id)->update([
        'job_title' => $request->job_title,
        'company_name' => $request->company_name,
        'job_description' => $request->job_description,
        'qualification' => $request->qualification,
        'job_location' => $request->job_location,
        'salary_range' => $request->salary_range,
        'deadline' => $request->deadline,
        'tags' => $request->tags,
        'job_type' => $request->job_type,
       ]);
       $request->session()->flash('success', 'Job edited successfully.');
       return redirect()->back();
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
