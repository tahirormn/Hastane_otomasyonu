<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    return view('homepage.home');
});

Route::get('/RandevuAl', function (){
    return view('userlogin.login');
});

Route::get('/UserRegister', function (){
    return view('UserRegister.register');
});

