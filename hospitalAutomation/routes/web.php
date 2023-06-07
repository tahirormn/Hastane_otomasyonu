<?php

use App\Http\Controllers\AuthorizedLoginController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ResultsLoginController;
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


Route::get('/kayit', function (){
    return view('appointment.appointment');
});
Route::get('/randevularim', function (){
    return view('appointment.randevularım');
});
Route::get('/randevularim/{id}', function (){
    return view('appointment.edit');
});

Route::get('resultLogin', function (){
    return view('results.authorizedLogin');
});

Route::get('/results', [ResultsLoginController::class, 'resultLoginScreen']);

Route::post('/res', [ResultsLoginController::class, 'resultLogin'])->name('res');


Route::post('/login',[PatientController::class,'ekle'])->name('register');

Route::post('/',[appointmentsController::class,'eklemek'])->name('appointment');

Route::post('/authorizedLogin', [AuthorizedLoginController::class, 'yetkiliGiris'])->name('authorizedLogin');


Route::get('/randevularim',[appointmentsController::class,'show'])->name('update');
Route::get('/randevularim/{id}',[appointmentsController::class,'edit'])->name('appointment.edit');
Route::post('/update/{id}',[appointmentsController::class,'update'])->name('appointment.randevularım');
Route::get('/delete/{id}',[appointmentsController::class, 'delete'])->name('delete');
//Route::post('/appointment',[AppointmentController::class,'submitForm'])->name('login');

Route::post('/appointment',[LoginController::class,'login'])->name('login');





