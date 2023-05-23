<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

     class LoginController extends Controller {
    // The method that handles form submission
    public function login(Request $request) {
        // Validate user input data (assuming email and password are required fields)
        $validatedData = $request->validate([
            'text' => 'required|text',
            'password' => 'required'
        ]);
        // Check if user exists in the database using Laravel's built-in authentication functionality
        if(Auth::attempt($validatedData)) {
            // If there is a match for user credentials, redirect to "make an appointment" page.
            return view('appointment.appointment');
        } else {
            // If there isn't a match for user credentials and they cannot be authenticated successfully,
            // return back to the login page with an error message.
            return redirect()->back()->withErrors(['msg', 'Invalid credentials']);
        }
    }
}
{

}
