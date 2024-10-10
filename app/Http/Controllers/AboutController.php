<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeamMembers;

use App\Models\User;

use App\Models\courses;

class AboutController extends Controller
{
    public function about()
    {   

        $userCount = User::count();
        $courses = courses::count();
        $teamMembers = TeamMembers::all();
        // compact hamara $teamMembers lekar jayega
        return view('user.about', compact('userCount', 'courses','teamMembers'));
    }


}
