<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::name('user.')->group(function(){
    Route::view('index', 'index')->middleware('auth')->name('index');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.index'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'signin'])->name('signin');

    Route::get('logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/register', function(){
        if(Auth::check()){
            return redirect(route('user.index'));
        }
        return view('register');
    })->name('register'); 

    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'save']);

});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactform', function () {
    return view('contactform');
})->name('contact-form');

Route::post('/contactform/aplly', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact-form-aplly');