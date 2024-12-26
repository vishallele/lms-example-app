<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;


    protected $fillable = [
        'phone_number',
        'designation',
        'about_user',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'profile_picture'
    ];

    public function User() {
        return $this->belongsTo(User::class);
    }
}
