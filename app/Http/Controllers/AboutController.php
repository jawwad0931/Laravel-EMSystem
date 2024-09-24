<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeamMembers;

class AboutController extends Controller
{
    public function about()
    {   
        $teamMembers = TeamMembers::all();
        // compact hamara $teamMembers lekar jayega
        return view('user.about', compact('teamMembers'));
    }
}
