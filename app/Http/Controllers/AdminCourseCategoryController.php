<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Courses_category as CourseCategories;
class AdminCourseCategoryController extends Controller
{
    public function index(){
        $course_categories = CourseCategories::all();
        return view('admin.AdminCourseCategory.index',compact('course_categories'));
    }

    public function create(){
        return view('admin.AdminCourseCategory.create');
    }


    public function store(request $request){
        $validated = $request->validate([
            'CourseIcon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'CourseName' => 'required|string|max:255',
            'CourseDescription' => 'required|string|max:255',
        ]);
        if($request->hasFile('CourseIcon')){
            $image = $request->file('CourseIcon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('public/course_category'), $imageName);
            $validated['CourseIcon'] = $imageName;
        }


        CourseCategories::create($validated);

        return redirect()->route('admin.AdminCourseCategory.index')->with('success', 'Course Category created successfully!');
    }



    public function destroy($id){
        $course_category = CourseCategories::findOrFail($id);
        $course_category->delete();
        return redirect()->route('admin.AdminCourseCategory.index')->with(  "success","Course Category deleted successfully");
    }

}
