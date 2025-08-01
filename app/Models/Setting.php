<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
     protected $fillable = [
            'school_name',
            'logo',
            'session_year',
            'address',
            'contact_email',
            'contact_phone',
       
    ];
}
