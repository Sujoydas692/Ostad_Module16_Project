<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|string',
        ]);

        // Log the submitted data
        Log::info('Contact Form Submitted', $validated);

        // Store in session for the next page
        session()->flash('success', 'Your message has been sent successfully!');
        return redirect()->route('contact.confirmation')->with('data', $validated);
    }

    public function confirmation(Request $request)
    {
        // Get data from session
        $data = session('data');
        if (!$data) {
            return redirect()->route('contact');
        }

        return view('contact-confirmation', compact('data'));
    }
}
