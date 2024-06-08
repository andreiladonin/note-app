<?php

use App\Http\Controllers\LoginAndRegistrationController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', "note");
Route::get('/home', function ()  {
    return view('index'); 
});
Route::resource('note', NoteController::class)->middleware('auth');
Route::get('/register', [LoginAndRegistrationController::class, 'register'])->name('register');
Route::post('/register', [LoginAndRegistrationController::class, 'store'])->name("store");
Route::get('/login', [LoginAndRegistrationController::class, 'login'])->name("login");
Route::post('/auth', [LoginAndRegistrationController::class, 'auth'])->name('auth');
Route::get('/logout', [LoginAndRegistrationController::class, 'signOut'])->name("signOut");