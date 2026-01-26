<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'avatar',
        'role',
        'department',
        'status',
        'employed_date',
    ];

    protected $casts = [
        'employed_date' => 'date',
    ];
}
