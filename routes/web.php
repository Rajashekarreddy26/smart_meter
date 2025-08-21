<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(){
    print "Welcome User";
});

// Route::get('registration',[Registration::class, 'index']);
Route::resource('registration', Registration::class);