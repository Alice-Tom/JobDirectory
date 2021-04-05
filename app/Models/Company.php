<?php

namespace App\Models;
use App\Models\Job;
use App\Models\Tender;
use App\Models\CompanyProfile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
        use HasFactory;

        protected $guarded = [];

        protected $hidden = [
            'created_at', 'updated_at',
            ];
    
        public function jobs()
        {
             return $this->hasMany(Job::class);
        }

        public function tenders()
        {
             return $this->hasMany(Tender::class);
        }

        public function companyProfile()
        {
             return $this->hasOne(CompanyProfile::class);
        }

        public function company()
        {
             return $this->belongsTo(User::class);
        }

        
}