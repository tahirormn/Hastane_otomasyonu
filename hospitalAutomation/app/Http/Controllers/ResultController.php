<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
class ResultController extends Controller
{
    public function ekle(Request $request)
    {
        $request->validate([
            'tc_identity' => 'required | min:11',
            'sonuc_dosya' => 'required|mimes:doc,docx,xlx,csv,pdf|max:1024'
        ]);
        $tc_identity=$request->tc_identity;
        $sonuc_dosya=$request->sonuc_dosya;
        $data=new Result;
        if($files=$request->file('sonuc_dosya')){
            $name=$files->getClientOriginalName();
            $files->move('uploads',$name);
            $data->sonuc_dosya=$name;
        }
        $data->save();
        Result::create([
            'tc_identity'=>$tc_identity,
            'sonuc_dosya'=>$sonuc_dosya
        ]);

        return view('results.resultLogin');
    }
}
