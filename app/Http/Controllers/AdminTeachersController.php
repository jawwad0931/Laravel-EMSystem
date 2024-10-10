<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeamMembers;
class AdminTeachersController extends Controller
{
    public function index(){
        $teamsMembers = TeamMembers::all();
        return view('admin.AdminTeacher.index',compact('teamsMembers'));
    }

    public function create(){
        return view('admin.AdminTeacher.create');
    }


    public function store(Request $request) {
        // Validate the input
        $request->validate([
            'MemberName' => 'required|string|max:255',
            'MemberExperties' => 'required|string|max:255',
            'MemberImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image types
        ]);
    
        // Prepare data for saving to the database
        $data = [
            'MemberName' => $request->MemberName,
            'MemberExperties' => $request->MemberExperties,
        ];
    
        // Check if the image file exists
        if ($request->hasFile('MemberImage')) {
            $image = $request->file('MemberImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Generate unique image name
            $image->move(public_path('storage/upload'), $imageName); // Save the image to the specified directory
            $data['MemberImage'] = $imageName; // Add the image name to the data array
        }
    
        // Create and save the record in the database
        TeamMembers::create($data);
    
        // Redirect back with success message
        return redirect()->route('admin.AdminTeacher.index')->with('success', 'Teacher added successfully');
    }
}
