<?php

namespace App\Models;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Job;
use App\Tender;
use App\Models\TenderApplicattion;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function username()
    {
        return 'username';
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    public function applicant()
    {
        return $this->hasOne(Applicant::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function tenders()
    {
        return $this->hasMany(Tender::class);
    }

    public function tenderapplications()
    {
        return $this->hasMany(TenderApplicaton::class);
    }

    public function JobSeeker()
    {
        return $this->hasOne(Applicant::class);
    }

    public function TenderSeeker()
    {
        return $this->hasOne(Applicant::class);
    }

    public function consultants()
    {
        return $this->hasOne(Applicant::class);
    }

    public function login($credentials)
    {
        $for = [
            'company' => 'company.dashboard',
            'job_seeker'  => 'jobseeker.dashboard',
            'tender_seeker'  => 'tenderseeker.dashboard',
            'consultant'  => 'consultant.dashboard',
           
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route($for[auth()->user()->getRoleNames()[0]]);
        }

        return 'failed';
    }

    public function logout()
    {
        Auth::logout();

       return redirect()->route('/');
    }
}
