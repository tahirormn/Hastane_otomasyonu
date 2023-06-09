<?php

namespace App\Http\Controllers;

class TahlilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $tahliller = $user->tahliller;

        return view('result', compact('tahliller'));
    }

}
