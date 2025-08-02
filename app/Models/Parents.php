<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
     protected $fillable = [
         'user_id',
        'father_name',
        'phone',
        'address',
        
    ];
    use HasFactory;
   
}
