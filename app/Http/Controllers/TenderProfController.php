<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Tenderprof;

class TenderProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tenderprof()
    {
        
        return view('pages.tenderseekerprof');

    } 
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('tenderprof')->insert([
            'companyname' => $request->companyname,
            'pnumber' => $request->pnumber,
            'email' => $request->email,
            'experience' => $request->experience,
            'nature' => $request->nature,
            'employee' => $request->employee,
            'companies' => $request->companies,
            'companyref' => $request->companyref,
            'pnumberref' => $request->pnumberref
           
       ]);
       return back()->with('post_created','succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($id)
    {
        $post = DB::table('tenderprof')->where('id',$id)->first();
        return view('pages.tenderseekerprof',compact('post'));
    }

    public function sidebar()
    {
        $post = DB::table('tenderprof')->get();
        return view('pages.tenderseekersidebar',compact('post'));
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
