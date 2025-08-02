<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
        'section_id',
        'parent_id',
        'name',
        'email',
        'phone',
        'address',
        'dob',
        'gender',
        'image',

       
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
