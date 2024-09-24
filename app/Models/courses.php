<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'Course_image',
        'Course_name',
        'Course_status',
    ];
}
