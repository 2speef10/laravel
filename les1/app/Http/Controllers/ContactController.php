<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Valideer het ingediende contactformulier
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Maak een nieuwe Contact record
        Contact::create($request->all());

        // Stuur een e-mail naar de beheerders
        Mail::send('emails.contacts-message', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ], function ($message) use ($request) {
            $message->from($request->email);
            $message->to('ilias.filali@student.ehb.be');
        });

        // Redirect terug met een bedankbericht
        return back()->with('thankyou', true);
    }
}
