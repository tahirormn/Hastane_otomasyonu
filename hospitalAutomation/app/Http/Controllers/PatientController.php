<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
class PatientController extends Controller
{
    public function index(){
        return view('appointment.appointment');
    }
    public function ekle(Request $request){
        $name=$request->name;
        $surname=$request->surname;
        $tc_identity=$request->tc_identity;
        $birthplace=$request->birthplace;
        $birthdate=$request->birthdate;
        $tel_num=$request->tel_num;
        $email=$request->email;
        $password=$request->password;
      //  $blood_id=$request->blood_id;

        Patient::create([
            'name'=>$name,
            'surname'=>$surname,
            'tc_identity'=>$tc_identity,
            'birthplace'=>$birthplace,
            'birthdate'=>$birthdate,
            'tel_num'=>$tel_num,
            'email'=>$email,
            'password'=>$password,
        //    'blood_id'=>$blood_id

        ]);
    }
}
