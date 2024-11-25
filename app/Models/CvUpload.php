<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvUpload extends Model
{
    use HasFactory;

    protected $table = 'cv_uploads'; // Ensure the table name matches your database table
    protected $fillable = ['cv_file','created_at','updated_at'];
}
