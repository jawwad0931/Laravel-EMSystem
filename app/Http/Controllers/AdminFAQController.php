<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\faq;

class AdminFAQController extends Controller
{
    public function index(){
        $faq = faq::all();
        return view('admin.AdminFAQ.index',compact('faq'));
    }

    public function create(){
        return view('admin.AdminFAQ.create');
    }


    public function store(request $request){
        $validated = $request->validate([
            'FAQ_Question' => 'required|string|max:255',
            'FAQ_Answer' => 'required|string|max:255',
        ]);

        faq::create($validated);

        return redirect()->back()->with('success', 'FAQ created successfully!');

    }
}
