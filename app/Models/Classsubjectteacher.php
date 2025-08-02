<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classsubjectteacher extends Model
{
    use HasFactory;
    protected $table = 'Classsubject_teachers';
    protected $fillable = [
        'class_id',
        'subject_id',
        'teacher_id',
    ];
}
