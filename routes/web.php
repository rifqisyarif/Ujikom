<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'dashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Form Submit
Route::post('/submit-form', [FormController::class, 'submitForm']);

// Create Asrama
Route::get('/createAsrama', [dashboardController::class, 'createAsrama']);

// Detail Asrama
Route::get('/detailAsrama', [dashboardController::class, 'detailAsrama']);
