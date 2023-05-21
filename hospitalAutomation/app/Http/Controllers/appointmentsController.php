<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Appointment;

class appointmentsController extends Controller
{
    public function index(){
        return view('appointment.appointment');
    }
public function eklemek(Request $request){
    $name=$request->name;
    $surname=$request->surname;
    $tc_identity=$request->tc_identity;
    $department=$request->department;
    $appoint_date=$request->appoint_date;
    $appoint_time=$request->appoint_time;
    $tel_num=$request->tel_num;
    Appointment::create([
        'name'=>$name,
        'surname'=>$surname,
        'tc_identity'=>$tc_identity,
        'department'=>$department,
        'appoint_date'=>$appoint_date,
        'appoint_time'=>$appoint_time,
        'tel_num'=>$tel_num,
    ]);
}
}
