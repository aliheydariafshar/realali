<?php

namespace App\Http\Controllers;

use App\ContactMe;
use App\Notifications\sendMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactMeController extends Controller
{
    public function store(Request $request)
    {
//        $request->validate([
//            'name'                 => 'required',
//            'subject'              => 'required',
//            'email'                => 'required|email',
//            'message'              => 'required',
//            'g-recaptcha-response' => 'required',
//        ]);
        ContactMe::create([
            'name'    => $request->name,
            'subject' => $request->subject,
            'email'   => $request->email,
            'content' => $request->message,
        ]);

        Notification::send(User::all(),new sendMail($request->message));

        return redirect()->back();
    }
}
