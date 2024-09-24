<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\faq;

class FAQsController extends Controller
{
    public function Faqindex()
    {
        // Fetch all FAQs from the database
        $faqs = Faq::all();
        // Pass the fetched data to the dashboard view
        return view('user.dashboard', compact('faqs'));
    }
}
