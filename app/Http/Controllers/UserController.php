<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Courses_category as CourseCategories;

use App\Models\faq;

class UserController extends Controller
{
    public function dashboard(){
        // Fetch FAQs
        $faqs = Faq::all();

        // Fetch Course Categories
        $courseCategories = CourseCategories::all();


        // Pass the fetched data to the view
        return view('user.dashboard', compact('faqs', 'courseCategories'));
    }

}