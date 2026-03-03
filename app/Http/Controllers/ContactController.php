<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:100',
            'budget' => 'nullable|string|max:50',
            'message' => 'required|string|max:5000',
        ]);

        // TODO: Store in database / send email notification

        return back()->with('success', 'Thank you for your enquiry! We will get back to you within 24 hours.');
    }
}
