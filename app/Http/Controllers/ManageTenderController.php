<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\User;
use App\Tender;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ManageTenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    

    
    public function getAllTenders()
    {
        $tenders = Auth::user()->tenders;
        return view('pages.managetenders',compact('tenders'));
    }


    public function tender($id)
    {
        $tenders = DB::table('tenders')->where('id',$id)->first();
        return view('pages.edittender',compact('tenders'));
    }

    public function deletepost($id)
    {
        DB::table('tenders')->where('id',$id)->delete();
        return back()->with('pages.managetenders');
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
       DB::table('tenders')->where('id',$request->id)->update([
                'tender_title' => $request->tender_title,
                'company_name' => $request->company_name,
                'tender_description' => $request->tender_description,
                'file' => $request->file,
                'tender_location' => $request->tender_location,
                'budget' => $request->budget,
                'fee' => $request->fee,
                'deadline' => $request->deadline,
                'tags' => $request->tags,
                'tender_type' => $request->tender_type
       ]);
       $request->session()->flash('success', 'Tender edited successfully.');
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
