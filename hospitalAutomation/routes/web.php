<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', function (){
    return view('homepage.home');
});

Route::get('/login', function (){
    return view('userlogin.login');
});

Route::get('/register', function (){
    return view('UserRegister.register');
});


//Route::get('/appointment',[PatientController::class,'index'])->name('register');
Route::post('/appointment',[PatientController::class,'ekle'])->name('register');
