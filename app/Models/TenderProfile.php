<?php
namespace App;
use App\Models\Applicant;
use Illuminate\Database\Eloquent\Model;
class TenderProfile extends Model
{
        protected $guarded = [];
                
        protected $hidden = [
        'created_at', 'updated_at',
        ];

        public function applicants()
        {
                return $this->belongsTo(Applicant::class);
        }
}