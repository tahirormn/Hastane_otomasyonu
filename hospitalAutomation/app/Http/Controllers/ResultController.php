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
        $result = new Result;
        $result->tc_identity = $request->tc_identity;


        if ($request->hasfile('sonuc_dosya')) {
            $dosya_ad = $this->str_slug($request->tc_identity) . '.' . $request->sonuc_dosya->getClientOriginalExtension();
            $request->sonuc_dosya->move(public_path('uploads'), $dosya_ad);
            $result->sonuc_dosya = 'uploads/' . $dosya_ad;
        }
        $result->save();

        return view('results.resultsLogin');
    }







}
