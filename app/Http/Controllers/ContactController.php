<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    // Method to handle contact form submission
    public function submit(Request $request)
    {
        // Validate form input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        // Prepare the data for sending
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];
        // Sending email logic
        Mail::send('contact', $data, function ($message) use ($data) {
            $message->to('e-mall@gmail.com')
                    ->subject('New Contact Form Submission: ' . $data['subject']);
        });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

}
