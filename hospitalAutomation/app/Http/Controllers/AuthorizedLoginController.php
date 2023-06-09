<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorizedLoginController extends Controller
{
    public function yetkiliGiris(Request $request){


        $tc = $request->tc_identity;
        $pass = $request->password;
        $data = DB::table('laborant')->where('tc_identity', '=', $tc)->where('password', '=', $pass)->exists();

        if ($data){
            return view('results.addResults');
        }

        return redirect()->back()->with('error','Girdiğiniz bilgiler hatalı veya kayıtlı değilsiniz.');



    }
}
