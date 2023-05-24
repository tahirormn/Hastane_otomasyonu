<?php

namespace App\Http\Controllers;

use App\Models\Blood_group;
use Illuminate\Http\Request;
use App\Models\Patient;
use DB;
class PatientController extends Controller
{
    public function ekle(Request $request){
        $name=$request->name;
        $surname=$request->surname;
        $tc_identity=$request->tc_identity;
        $birthplace=$request->birthplace;
        $birthdate=$request->birthdate;
        $blood_group=$request->blood_group;
        $tel_num=$request->tel_num;
        $email=$request->email;
        $password=$request->password;


        Patient::create([
            'name'=>$name,
            'surname'=>$surname,
            'tc_identity'=>$tc_identity,
            'birthplace'=>$birthplace,
            'birthdate'=>$birthdate,
            'blood_group'=>$blood_group,
            'tel_num'=>$tel_num,
            'email'=>$email,
            'password'=>$password

        ]);
        return view('UserLogin.login');
    }
}
