<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feepayment extends Model
{
    use HasFactory;
     protected $table = 'fee_payments';
    protected $fillable = [
        'student_id',
        'fee_structure_id',
        'amount_paid',
        'payment_date',
        'method',
    ];
    use HasFactory;
}
