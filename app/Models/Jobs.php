<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
protected $fillable = [
        'jobtitle',
        'jobdescription',
        'qualification',
        'companyname',
        'joblocation',
        'salaryrange',
        'deadline',
        'tags',
        'jobtype'
];
protected $hidden = [
'created_at', 'updated_at',
];
}