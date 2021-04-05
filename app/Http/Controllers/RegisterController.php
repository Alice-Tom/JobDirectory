<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   


    public function index(Request $request)
    {
        $query = $request->registration_type;

        if ($query == 'company') {
            return view('auth.register.company');
        }

        if ($query == 'job_seeker') {
            return view('auth.register.job_seeker');
        }

        if ($query == 'tender_seeker') {
            return view('auth.register.tender_seeker');
        }

        return view('auth.register.consultant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Role::firstOrCreate(['name' => $request->registration_type]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->registration_type);

        if ($request->registration_type == 'company') {

            $user->company()->create([
                'company_name' => $request->company_name,
                'username' => $request->username,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
            ]);

        } elseif ($request->registration_type == 'job_seeker') {

            $user->JobSeeker()->create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'experience' => $request->experience,
                'phone_number' => $request->phone_number,
            ]);

        } elseif ($request->registration_type == 'tender_seeker') {

            $user->TenderSeeker()->create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'experience' => $request->experience,
                'phone_number' => $request->phone_number,
            ]);

        } elseif ($request->registration_type == 'consultant') {

            $user->consultants()->create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'experience' => $request->experience,
                'phone_number' => $request->phone_number,
            ]);
        } 

        $credentials = $request->only('username', 'password');
        
        return $user->login($credentials);
    }

    // public function login($credentials)
    // {
    //     $for = [
    //         'company' => 'company.dashboard',
    //         'job_seeker'  => 'foundations.splashscreen',
    //     ];

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->route($for[auth()->user()->roles[0]]);
    //     }

    //     return 'failed';
    // }

    // public function logout()
    // {
    //     Auth::logout();

    //     // return redirect...
    // }

}
