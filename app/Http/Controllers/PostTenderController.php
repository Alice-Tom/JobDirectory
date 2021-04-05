<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Tender;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PostTenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posttender()
    {
        return view('pages.posttender');   
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.posttender');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tender = Tender::create([
            'user_id' => Auth::user()->id,
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
       $request->session()->flash('success', 'Tender posted successfully.');
       return redirect()->back();
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


     
    public function getAllTenders()
    {
        $tenders = DB::table('tender')->get();
        return view('pages.managetenders',compact('tenders'));
    }


    public function tender($id)
    {
        $tenders = DB::table('tender')->where('id',$id)->first();
        return view('pages.edittender',compact('tenders'));
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
