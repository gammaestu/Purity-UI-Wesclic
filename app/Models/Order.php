<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'color',
        'order_date',
    ];

    protected $casts = [
        'order_date' => 'datetime',
    ];
}
