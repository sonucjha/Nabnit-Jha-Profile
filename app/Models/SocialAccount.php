<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    use HasFactory;

    protected $table = 'social_accounts'; // Ensure the table name matches your database table
    protected $fillable = ['name', 'url', 'icon'];
}
