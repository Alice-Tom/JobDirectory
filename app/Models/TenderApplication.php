<?php

namespace App\Models;
use App\Models\Applicant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderApplication extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'tender_applications';

    protected $hidden = [
        'created_at', 'updated_at',
        ];

    public function applicant()
    {
            return $this->belongsTo(Applicant::class);
    }

    public function tenderapplication()
    {
         return $this->belongsTo(User::class);
    }
}
