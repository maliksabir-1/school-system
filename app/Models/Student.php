<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',         
        'name',
        'email',
        'phone',
        'address',
        'dob',
        'gender',
        'roll_number',
        'class_id',

       
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
