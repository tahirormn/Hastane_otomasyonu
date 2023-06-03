<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Appointment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class appointmentsController extends Controller
{

    public function eklemek(Request $request)
    {
        $name = $request->name;
        $surname = $request->surname;
        $tc_identity = $request->tc_identity;
        $department = $request->department;
        $appoint_date = $request->appoint_date;
        $appoint_time = $request->appoint_time;
        $tel_num = $request->tel_num;

        $k = DB::table('appointments')->where('department', '=', $department)->get();

        $l = null;
        $f = null;

        foreach ($k as $db_dep){
            $l = $db_dep->appoint_date;
            $f = $db_dep->appoint_time;
        }

        if($appoint_date == $l && $appoint_time == $f){
            return redirect()->back() ->with('alert', 'Aradığınız kriterlere uygun randevu bulunamadı.');
        }

        else{
            Appointment::create([
                'name' => $name,
                'surname' => $surname,
                'tc_identity' => $tc_identity,
                'department' => $department,
                'appoint_date' => $appoint_date,
                'appoint_time' => $appoint_time,
                'tel_num' => $tel_num,
            ]);
            return view('homepage.home');

        }


    }
    public function show(){
        $appoint=Appointment::get();
        return view('appointment.randevularım',compact('appoint'));
    }
    public function edit($id){
        $appoint=Appointment::findOrFail($id);
        return view('appointment.edit',compact('appoint'));
    }
    public function update(Request $request,$id){
        $randevu=Appointment::findOrFail($id);
        $randevu->update([
            'department'=>$request->department,
            'appoint_date'=>$request->appoint_date,
            'appoint_time'=>$request->appoint_time,
        ]);

    }
    public function delete($id){
        $randevu=Appointment::findOrFail($id)->delete();
        return \redirect()->back();
    }
}
