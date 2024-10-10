<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class AdminRegisUserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.RegisUsers.index',compact('users'));
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);  // Ensure 'User' is capitalized correctly as per your model name
        $user->delete();
        return redirect()->route('admin.AdminRegisUsers.index')->with('success', 'User deleted successfully');
    }
}
