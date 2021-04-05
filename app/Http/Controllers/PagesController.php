<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $jobs = DB::table('jobs')->get();
        return view('pages.index',compact('jobs'));
    }
    
    public function about()
    {
        return view('pages.about');
    }

    
    public function contact()
    {
        return view('pages.contact');
    }

    public function jobseeker()
    {
        return view('pages.jobseeker');
    }

    public function tenderseekerprof()
    {
        return view('pages.tenderseekerprof');
    }

    public function jobseekprofile()
    {
        return view('pages.jobseekprofile');
    }

    public function uploadcv()
    {
        return view('pages.uploadcv');
    }


    public function dashboard()
    {
        return view('pages.dashboard');
    }


    public function companydash()
    {
        return view('pages.company_dashboard');
    }

    // public function employerdash()
    // {
    //     return view('pages.employerdash');
    // }

    
    // public function tenderdash()
    // {
    //     return view('pages.tenderdash');
    // }

    
    public function jobseekerdash()
    {
        $jobs = DB::table('jobs')->get();
        return view('pages.jobseekerdash',compact('jobs'));
    }

     
    public function tenderseekerdash()
    {
        $tenders = DB::table('tenders')->get();
        return view('pages.tenderseekerdash',compact('tenders'));
    }
      
    public function getAllJob()
    {
        $jobs = DB::table('jobs')->get();
        return view('pages.index',compact('jobs'));
    }

   
   
}
