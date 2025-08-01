<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feestructure extends Model
{
    protected $table = 'fee_structures';
    protected $fillable = [
        'class_id',
        'amount',
        'month',
        'year',
    ];
    use HasFactory;
}
