<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // ✅ Correct namespace


class ContactFormController extends Controller
{
    public function post_message(Request $request)
    {
        // Form validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Collect form data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send email to admin
        Mail::to('itsanvert@gmail.com')->send(new ContactFormMail($data));

        // Return response
        return back()->with('msg', 'Your message has been sent successfully!');
    }
}
