<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_date',
        'invoice_number',
        'amount',
        'pdf_path',
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'amount' => 'decimal:2',
    ];
}
