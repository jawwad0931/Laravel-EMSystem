<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\form;

// main jab Storage ko edit ke time define kar raha tha mujhe isse define karne ki need thi
use Illuminate\Support\Facades\Storage;


class FormController extends Controller
{

    public function show($id){
        $form = form::find($id);
        return view('user.form.show',compact('form'));
    }
    public function create(){
        return view('user.form.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            // 'id' => 'required',
            'std_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'class' => 'required|integer',
            'school_name' => 'required|string|max:255',
            'phone' =>'required|string|max:15',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'Dob' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'agree' => 'required:boolean',
        ]);

        if($request->hasFile('std_image')){
            $data['std_image'] = $request->file('std_image')->store('storage/upload', 'public');
        }


        form::create($data);
        return redirect()->back()->with("success","Your form has been submitted successfully");
    }



    public function edit($id){
        $form = form::find($id);
        return view('user.form.edit',compact('form'));
    }

    public function update(Request $request, $id)
    {
        $form = Form::find($id);

        // Validate input fields
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'father_name' => 'required|string',
            'email' => 'required|email',
            'class' => 'required|string',
            'school_name' => 'required|string',
            'phone' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'age' => 'required|integer',
            'Dob' => 'required|date',
            'gender' => 'required|string',
            'agree' => 'required|boolean',
            'std_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'  // Validation for image upload
        ]);

        // Update form fields
        $form->first_name = $request->input('first_name');
        $form->last_name = $request->input('last_name');
        $form->father_name = $request->input('father_name');
        $form->email = $request->input('email');
        $form->class = $request->input('class');
        $form->school_name = $request->input('school_name');
        $form->phone = $request->input('phone');
        $form->city = $request->input('city');
        $form->address = $request->input('address');
        $form->age = $request->input('age');
        $form->Dob = $request->input('Dob');
        $form->gender = $request->input('gender');
        $form->agree = $request->input('agree');

        // Handle image upload if exists
        if ($request->hasFile('std_image')) {
            // Delete old image
            if ($form->std_image) {
                Storage::delete('public/images/' . $form->std_image);
            }

            // Store new image
            $form->std_image = $request->file('std_image')->store('images', 'public');
        }

        // Save updated data
        $form->save();

        return redirect()->route('user.form.edit', $form->id)->with('success', 'Form updated successfully.');
    }
}
