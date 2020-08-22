<?php

namespace App\Http\Controllers;

use App\ContactMe;
use Illuminate\Http\Request;

class ContactMeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'                 => 'required',
            'subject'              => 'required',
            'email'                => 'required|email',
            'message'              => 'required',
            'g-recaptcha-response' => 'required',
        ]);
        ContactMe::create([
            'name'    => $request->name,
            'subject' => $request->subject,
            'email'   => $request->email,
            'content' => $request->message,
        ]);
        return redirect()->back();
    }
}
