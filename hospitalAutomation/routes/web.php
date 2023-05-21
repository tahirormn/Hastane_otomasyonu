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
//Route::get('/randevu', function (){
  //  return view('appointment.appointment');
//});


Route::post('/appointment',[PatientController::class,'ekle'])->name('register');
Route::get('/randevu',[appointmentsController::class,'index'])->name('randevu');
Route::post('/randevu_alınıyor',[appointmentsController::class,'eklemek'])->name('randevu_alınıyor');
