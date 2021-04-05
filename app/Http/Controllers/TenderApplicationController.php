<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use App\Models\TenderApplication;
use App\Models\Applicant;
use App\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TenderApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.singletender');
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.singletender');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $tender = TenderApplication::find($id);
        $applicantId = Auth::user()->applicant->id;
        $tender->applicant()->attach($applicantId);
        
        $request->session()->flash('success', 'Tender applied successfully. Please wait for your confirmation.');
        return redirect()->back();
    }

    public function getAllApplicants()
    {
        $tenders = DB::table('tender_applications')->where('id',$tenders->tenders_id)->value('company_name');
        // $jobs = DB::table('job_applications')->get();
        return view('pages.tender_applicants',compact('jobs'));
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
