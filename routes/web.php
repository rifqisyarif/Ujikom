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

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\detailAsrama;
use App\Http\Controllers\FormController;
use App\Http\Controllers\jadwalCutiController;
use App\Http\Controllers\musyrifController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Asrama
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/createAsrama', [dashboardController::class, 'createAsrama'])->name('createAsrama');
Route::get('/detailAsrama', [dashboardController::class, 'detailAsrama'])->name('detailAsrama');
Route::get('/createSantri', [dashboardController::class, 'createSantri'])->name('createSantri');

Route::post('/createAsrama', [dashboardController::class, 'store'])->name('/createAsrama');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

// Form Submit
Route::post('/submit-form', [FormController::class, 'submitForm']);

// Musyrif
Route::get('/musyrif', [musyrifController::class, 'index'])->name('musyrif');
Route::get('/detailMusyrif', [musyrifController::class, 'detailMusyrif'])->name('detailMusyrif');
Route::get('/createMusyrif', [musyrifController::class, 'createMusyrif'])->name('createMusyrif');
Route::post('/createMusyrif', [musyrifController::class, 'store'])->name('createMusyrif');

// Jadwal Cuti
Route::get('/jadwalCuti', [jadwalCutiController::class, 'index'])->name('jadwalCuti');
Route::get('/createCuti', [jadwalCutiController::class, 'createCuti'])->name('createCuti');
Route::get('/detailCuti', [jadwalCutiController::class, 'detailCuti'])->name('detailCuti');

Auth::routes();
