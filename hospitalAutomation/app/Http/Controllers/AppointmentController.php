<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AppointmentController extends Controller {
    // The method that handles form submission
    public function submitForm(Request $request) {
        // Your validation logic here
        // If validation passes, store data in database and redirect to "appointment" page.
        DB::table('appointments')->insert([
            'text' => $request->input('text'),
            'email' => $request->input('email'),

        ]);
        return view('/appointment');
    }
}
