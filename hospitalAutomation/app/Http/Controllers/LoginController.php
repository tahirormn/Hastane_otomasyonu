<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller{
    public function login(Request $request) //veri kontrolü
    {

        $datalar = DB::table('patients')->get();
        $tc_identity = $request->tc_identity;
        $password = $request->password;
        foreach ($datalar as $data)
        {
            if ($data->tc_identity == $tc_identity and $data->password == $password) {
                return view('homepage.home_user');
            }
        }
        return redirect()->back()->with('error','Girdiğiniz bilgiler hatalı veya kayıtlı değilsiniz.');
    }
    public function info(Request $request){
        $tc_identity=$request->tc_identity;
        return $tc_identity;
    }


}

