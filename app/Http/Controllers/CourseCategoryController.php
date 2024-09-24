<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Courses_category as CourseCategories;

class CourseCategoryController extends Controller
{
     // Method to fetch course categories from the database
     public function Catogoryindex()
     {
         // Fetch all course categories from the database
         $courseCategories = CourseCategories::all();
 
         // Pass the fetched data to the view
         return view('user.dashboard', compact('courseCategories'));
     }
}
