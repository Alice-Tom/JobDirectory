<?php

namespace App\Models;
use App\Models\Applicant;
use App\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at',
        ];

    public function applicants()
    {
            return $this->belongsTo(Applicant::class);
    }

    public function job()
    {
         return $this->belongsTo(User::class);
    }
}
