<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultsLoginController extends Controller
{
    public function resultLoginScreen(){
        return view('results.resultsLogin');
    }

    public function resultLogin(Request $request){
        $datalar = DB::table('patients')->get();
        $tc = $request->tc_identity;
        $pass = $request->password;
        foreach ($datalar as $data)
        {
            if ($tc == $data->tc_identity and $pass == $data->password) {
                return view('results.result');
            }
        }
        return redirect()->back()->with('error','Girdiğiniz bilgiler hatalı veya kayıtlı değilsiniz.');

    }


}
