<?php

namespace App\Models;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at', 'updated_at',
        ];

    public function company()
    {
         return $this->belongsTo(Company::class);
    }

}
