<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekprof extends Model
{
protected $fillable = [
        'fname',
        'lname',
        'pnumber',
        'email',
        'experience',
        'profession',
     
            
];
protected $hidden = [
'created_at', 'updated_at',
];
}