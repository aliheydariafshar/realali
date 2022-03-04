<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::post('contact_me', 'ContactMeController@store')
    ->name('message.store');
