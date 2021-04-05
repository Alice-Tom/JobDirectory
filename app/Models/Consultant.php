<?php

namespace App\Models;
use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
        protected $guarded = [];


        protected $hidden = [
        'created_at', 'updated_at',
        ];

        public function applications()
        {
                return $this->belongsTo(Applicant::class);
        }

}