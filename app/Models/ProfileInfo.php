<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bio',
        'full_name',
        'mobile',
        'location',
        'avatar',
        'social_media',
    ];

    protected $casts = [
        'social_media' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
