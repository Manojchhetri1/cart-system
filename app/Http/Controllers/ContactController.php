<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        $displays = Contact::all();
        return view('dashboard',compact('displays'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,            
            'description' => $request->description,
        ]);
        return back()->with('success', 'Contact created successfully');
    }
}
