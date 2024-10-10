<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\courses;

use App\Models\User;

use App\Models\form;

use App\Models\Contact;

class AdminController extends Controller
{
    public function dashboard()
    {
        $courses = courses::all();
        // yeh total counter ki amount ko count karke unka total batata hai
        $users = User::count();
        $forms = form::count();
        $contacts = Contact::count();
        return view('admin.dashboard', compact('courses', 'users', 'forms', 'contacts'));
    }


    // for courses add methods
    public function create()
    {
        return view('admin.dashboard');
    }


    // ==========================================================================================================================
    // Method to store the submitted data
    // public function store(Request $request)
    // {
    //     // Validate incoming request
    //     $validated = $request->validate([
    //         'Course_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'Course_name' => 'required|string|max:255',
    //         'Course_status' => 'required|string|in:Available,Unavailable,Upcoming',
    //     ]);

    //     // yahan mai images ko define kar raha hon
    //     if ($request->hasFile('Course_image')) { // Check for 'Course_image' with capital 'C'
    //         $image = $request->file('Course_image');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension(); // Create a unique image name
    //         $image->move(public_path('public/upload'), $imageName); // Save the image to public/images/courses directory
    //         $validated['Course_image'] = $imageName; // Store the image name/path in the validated array for saving to the database
    //     }
    //     // Create and save the product
    //     courses::create($validated);
    //     // Redirect or return response
    //     return redirect()->route('admin.dashboard')->with('success', 'Product created successfully!');
    // }


    public function store(Request $request){
        $validated = $request->validate([
            'Course_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Course_name' => 'required|string|max:255',
            'Course_status' => 'required|string|in:Available,Unavailable,Upcoming',
        ]);

        if($request->hasFile('Course_image')){
            $image = $request->file('Course_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('public/upload'),$imageName);
            $validated['Course_image'] = $imageName;
        }
        courses::create($validated);
        return redirect()->route('admin.dashboard')->with('success', 'Course created successfully');
    }


    // =========================================================================================================================
    // AdminController.php
    public function destroy($id)
    {
        // Find the record by ID and delete it
        $course = Courses::findOrFail($id);
        $course->delete();

        // Redirect back with success message
        return redirect()->route('admin.dashboard')->with('success', 'Course deleted successfully');
    }

}
