<?php

namespace App\Models;
use App\Models\TenderApplicantion;
use App\JobApplicantion;
use App\Models\JobSeekerProfile;
use App\Models\TenderProfile;
use App\Models\Consultant;
use App\Tender;
use App\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    
    protected $hidden = [
        'created_at', 'updated_at',
        ];

    protected $guarded = [];

    public function TenderApplications()
    {
         return $this->hasMany(TenderApplication::class);
    }

    public function JobApplications()
    {
         return $this->hasMany(JobApplication::class);
    }

    public function TenderProfile()
    {
         return $this->hasOne(TenderProfile::class);
    }

    public function JobProfile()
    {
         return $this->hasOne(JobSeekerProfile::class);
    }

    public function consultant()
    {
         return $this->hasOne(Consultant::class);
    }

    public function role()
    {
         return $this->hasOne(Role::class);
    }

    public function tenders()
    {
         return $this->belongsToMany(Tender::class);
    }

    public function job()
    {
         return $this->belongsToMany(Job::class);
    }

    public function applicant()
    {
         return $this->belongsTo(User::class);
    }

    public function JobSeeker()
    {
         return $this->belongsTo(User::class);
    }

    public function TenderSeeker() 
    {
         return $this->belongsTo(User::class);
    }

    public function consultants()
    {
         return $this->belongsTo(User::class);
    }

    
}
