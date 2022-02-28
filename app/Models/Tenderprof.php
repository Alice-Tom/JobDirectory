<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenderprof extends Model
{
protected $fillable = [
        'companyname',
        'pnumber',
        'email',
        'experience',
        'nature',
        'employee',
        'companies',
        'companyref',
        'pnumberref',
            
];
protected $hidden = [
'created_at', 'updated_at',
];
}