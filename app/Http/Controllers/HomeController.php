<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function home()
    {
//        Redis::set('name', 'Taylor');
//        dd(Redis::get('name'));
        return view('home');
    }
}
