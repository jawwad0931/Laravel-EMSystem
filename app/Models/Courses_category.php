<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses_category extends Model
{
    use HasFactory;

    protected $table = 'courses_categories';

    protected $fillable = [
    'CourseIcon',
    'CourseName',
    'CourseDescription',
    ];
}
