<?php

namespace App;
namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Job;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postjob()
    {
        
        return view('pages.postjob');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.postjob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        {
                $job = Job::create([
                'user_id' => Auth::user()->id,
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
            
            $request->session()->flash('success', 'Job posted successfully.');
                return redirect()->back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
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
