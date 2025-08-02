<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

     protected $fillable = [
        'name',
        'class_id',
       
    ];
    use HasFactory;
}
