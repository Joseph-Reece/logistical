<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //
    public function index()
    {
        return view('pages.contact');

    }

    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'fname' => ['required', 'string', 'max:255' ],
            'lname' => ['required', 'string', 'max:255' ],
            'email' => ['required', 'string', 'email', 'max:255' ],
            'phone_number' => ['string', 'max:255'],
            'message' => ['required', 'string', 'max:255']
        ]);


        $contact = $request->except('_token');

        Mail::send(new ContactFormMail($contact));

        return redirect()->back()->with('success', "Your email has been recieved !!");
    }
}
