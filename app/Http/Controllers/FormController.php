<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // retrieve the form data
        $email = $request->input('email');
        $password = $request->input('password');

        // validate the form data
        if (auth()->attempt(array('email' => $email, 'password' => $password))) {
            return response()->json([
                'success' => true,
                'message' => 'Form submitted successfully!'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Please fill out all form fields.'
            ], 400);
        }

        // process the form data
        // for example, you might save the data to a database or send an email
        // ...

        // return a success response if the form data is valid and has been processed successfully

    }
}
