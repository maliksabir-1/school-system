<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

     protected $fillable = [
       'user_id',
        'name',
        'dob',
        'gender',
        'qualification',
        'phone',
        'address',
    ];
    use HasFactory;
}
