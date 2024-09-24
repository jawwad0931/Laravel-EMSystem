<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
class ContactController extends Controller
{
    // Show the contact form
    public function create()
    {
        return view('user.contact.create'); // Create this view file
    }

    // Store the contact form data
    public function store(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'First_name' => 'required|string|max:255',
            'Last_name' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255',
            'Message' => 'required|string',
        ]);

        // Insert data into the database
        Contact::create($data);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
