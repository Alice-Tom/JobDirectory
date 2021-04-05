<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = DB::table('jobs')->get();
        return view('home',compact('jobs'));
    }

           
    public function getAllJobs()
    {
        $jobs = DB::table('jobs')->get();
        return view('auth.login',compact('jobs'));
    }
    
     
     
    }

