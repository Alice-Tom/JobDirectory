<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\JobSeekprof;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class JobSeekprofController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function jobseekprof()
    {
        return view('pages.jobseekprofile');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jobseekprofile');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('job_seeker_profiles')->insert([
            'user_id' => Auth::user()->id,
            'profession' => $request->profession,
            'cv' => $request->cv
           
       ]);
       $request->session()->flash('success', 'Profile updated successfully.');
       return redirect()->back();

    }


    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

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
