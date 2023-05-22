<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\appointmentsController;
Route::get('/', function (){
    return view('homepage.home');
});

Route::get('/login', function (){
    return view('userlogin.login');
});

Route::get('/register', function (){
    return view('UserRegister.register');
});


Route::post('/appointment',[PatientController::class,'ekle'])->name('register');
Route::post('/',[appointmentsController::class,'eklemek'])->name('appointment');

Route::get('/about', function (){
    return view('about');
});
Route::get('/doctors', function (){
    return view('doctors');
});
Route::get('/boardOfDirector', function (){
    return view('boardOfDirector');
});
