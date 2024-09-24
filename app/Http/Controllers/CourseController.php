<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\courses;

class CourseController extends Controller
{
    public function courses(){
        $courses = courses::all();
        return view('user.courses', compact('courses'));
    }
}
