<?php
namespace App;
use App\Models\Company;
use App\Models\Applicant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
        use HasFactory;

        protected $guarded = [];

        protected $hidden = [
                 'created_at', 'updated_at',
        ];

        public function company()
        {
                return $this->belongsTo(Company::class);
        }

        public function applicant()
        {
             return $this->belongsToMany(Applicant::class);
        }

        public function jobs()
        {
             return $this->belongsTo(User::class);
        }
    
}
