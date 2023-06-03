<?php

use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\appointmentsController;
use App\Http\Controllers\LoginController;
Route::get('/', function (){
    return view('homepage.home');
});

Route::get('/login', function (){
    return view('UserLogin.login');
});

Route::get('/register', function () {
    return view('UserRegister.register');
});

Route::get('/about', function (){
    return view('about');
});
Route::get('/doctors', function (){
    return view('doctors');
});
Route::get('/boardOfDirector', function (){
    return view('boardOfDirector');
});

Route::get('results', function (){
    return view('results.result');
});

Route::post('/login',[PatientController::class,'ekle'])->name('register');

Route::post('/',[appointmentsController::class,'eklemek'])->name('appointment');

Route::post('/appointment',[LoginController::class,'login'])->name('login');




