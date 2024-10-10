<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.AdminContact.index',compact('contacts'));
    }


    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.AdminContact.index')->with("success","Contact deleted successfully");
    }

    public function truncateTable(Request $request){
        // Delete all records in the 'contacts' table
        Contact::truncate();
        return redirect()->route('admin.AdminContact.index')->with("success","All Contact deleted successfully");
    }

}
