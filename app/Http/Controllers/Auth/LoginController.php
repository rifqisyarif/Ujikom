<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function submitForm(Request $request)
    {
        // retrieve the form data
        $email = $request->input('email');
        $password = $request->input('password');

        // validate the form data
        if (empty($email) || empty($password)) {
            // return an error response if the form data is invalid
            return response()->json([
                'success' => false,
                'message' => 'Please fill out all form fields.'
            ], 400);
        }

        // process the form data
        // for example, you might save the data to a database or send an email
        // ...

        // return a success response if the form data is valid and has been processed successfully
        return response()->json([
            'success' => true,
            'message' => 'Form submitted successfully!'
        ], 200);
    }
}
