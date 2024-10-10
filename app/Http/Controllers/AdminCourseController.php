<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\courses;

class AdminCourseController extends Controller
{
    // AdminController.php
    public function edit($id)
    {
        $course = Courses::findOrFail($id);
        return view('admin.AdminCourse.edit', compact('course')); 
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'Course_name' => 'required|string|max:255',
            'Course_status' => 'required|string|in:Available,Unavailable,Upcoming',
            'Course_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'created_at' => 'required|date',
        ]);
    

        
        // Find the course by ID
        $course = Courses::findOrFail($id);
    
        // Handle image upload if a new image is uploaded
        if ($request->hasFile('Course_image')) {
            $image = $request->file('Course_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('path_to_images'), $imageName);
            $course->Course_image = $imageName; // Update course image
        }
    
        // Update other course details
        $course->Course_name = $request->input('Course_name');
        $course->Course_status = $request->input('Course_status');
        $course->created_at = $request->input('created_at'); // Make sure created_at is editable if necessary
    
        // Save the updated course details
        $course->save();
    
        // Redirect back to the edit page with success message
        return redirect()->route('admin.dashboard', $course->id)->with('success', 'Course updated successfully!');
    }
    



}
