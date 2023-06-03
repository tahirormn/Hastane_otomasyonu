<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
     class LoginController extends Controller
     {
         public function login(Request $request) //veri kontrolü
         {
             $datalar = DB::table('patients')->get();
             $tc_identity = $request->tc_identity;
             $password = $request->password;
             foreach ($datalar as $data)
             {
                     if ($data->tc_identity == $tc_identity and $data->password == $password) {
                         return view('appointment.appointment');
                     }
             }
             return redirect()->back()->with('error','Girdiğiniz bilgiler hatalı veya kayıtlı değilsiniz.');
         }
     }

