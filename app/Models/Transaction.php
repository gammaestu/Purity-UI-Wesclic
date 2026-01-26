<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'transaction_date',
        'amount',
        'is_negative',
        'category',
    ];

    protected $casts = [
        'transaction_date' => 'datetime',
        'amount' => 'decimal:2',
        'is_negative' => 'boolean',
    ];
}
