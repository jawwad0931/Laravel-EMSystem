<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\form;

class FormController extends Controller
{
    public function create(){
        return view('user.form.create');
    }

    public function store(Request $request){
        $data = $request->validate([
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

        if ($request->hasFile('std_image')) {
            $data['std_image'] = $request->file('std_image')->store('images', 'public');
        }


        form::create($data);
        return redirect()->back()->with("success","Your form has been submitted successfully");
    }
}
