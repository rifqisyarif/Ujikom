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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AsramaController;
use App\Http\Controllers\MusyrifController;
use App\Http\Controllers\JadwalCutiControllerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect(route('asrama.index'));
    }
    return view('auth.login');
});

Auth::routes(); // untuk login dan logout

// Route::post('/submit-form', [LoginController::class, 'submitForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Asrama
Route::resource('asrama', AsramaController::class);
// Route::get('dashboard', [AsramaController::class, 'index']);
Route::get('asrama/tambahAsrama', [AsramaController::class, 'tambahAsrama']);
Route::get('searchSantri/{noAsrama}', [AsramaController::class, 'searchSantri'])->name('searchSantri');

// Musyrif
Route::resource('/musyrif', MusyrifController::class);
Route::resource('/jadwalCuti', JadwalCutiControllerController::class);;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AsramaController::class, 'index']);
});
