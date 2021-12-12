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
        $request->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
            'email' => 'required|email',
            'content' => 'required|string',
            'g-recaptcha-response' => 'recaptcha',
        ]);
        ContactMe::query()->create($request->all());

//        Notification::send(User::all(),new sendMail());

        return back()->with('success', 'پیام شما با موفقیت ثبت شد.');
    }
}
