<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

     protected $fillable = [
        'date',
        'status',
        'remarks',
        
    ];
    use HasFactory;
}
