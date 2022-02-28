<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
protected $fillable = ['name', 'address'];
protected $hidden = [
'created_at', 'updated_at',
];
}