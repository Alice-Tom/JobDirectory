<?php
namespace App;
use App\Models\Company;
use App\Models\User;
use App\Models\Applicant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tender extends Model
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

        public function applicants()
        {
             return $this->belongsToMany(Applicant::class);
        }

        public function tenders()
        {
             return $this->belongsTo(User::class);
        }
    
}
