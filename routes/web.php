<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('Home-11939');
});

Route::get('/Home-11939', function () {
    return view('Home-11939');
});

Route::get('/profile-Catherine', function () {
    return view('profile-Catherine', [
        "nama" => 'Catherine',
        "npm" => '220711939',
        "quotes" => 'Jangan lupa napas'
    ]);
});