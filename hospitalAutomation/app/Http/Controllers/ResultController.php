<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function ekle(Request $request)
    {
        $tc = $request->tc_identity;
        $glukoz = $request->glukoz;
        $kreatinin = $request->kreatinin;
        $urikAsit = $request->urikAsit;
        $alt = $request->alt;
        $kolestrol = $request->kolestrol;


        Result::create([
            'tc_identity'=>$tc,
            'glukoz' => $glukoz,
            'kreatinin' => $kreatinin,
            'urik_asit' => $urikAsit,
            'ALT' => $alt,
            'kolestrol' => $kolestrol
        ]);

        return view('results.resultsLogin');
    }



}
