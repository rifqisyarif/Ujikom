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
    return view('auth.login');
});

Auth::routes();
// Route::post('/submit-form', [LoginController::class, 'submitForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Asrama
Route::get('asrama/tambahAsrama', [AsramaController::class, 'tambahAsrama']);
Route::resource('asrama', AsramaController::class);



// Musyrif
Route::resource('/musyrif', MusyrifController::class);
Route::resource('/jadwalCuti', JadwalCutiControllerController::class);



// // Asrama
// Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
// Route::get('/createAsrama', [dashboardController::class, 'createAsrama'])->name('createAsrama');
// Route::get('/detailAsrama', [dashboardController::class, 'detailAsrama'])->name('detailAsrama');
// Route::get('/createSantri', [dashboardController::class, 'createSantri'])->name('createSantri');
// Route::post('/createAsrama', [dashboardController::class, 'store'])->name('/createAsrama');
// Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

// // Form Submit
// Route::post('/submit-form', [FormController::class, 'submitForm']);

// // Musyrif
// Route::get('/musyrif', [musyrifController::class, 'index'])->name('musyrif');
// Route::get('/detailMusyrif', [musyrifController::class, 'detailMusyrif'])->name('detailMusyrif');
// Route::get('/createMusyrif', [musyrifController::class, 'createMusyrif'])->name('createMusyrif');
// Route::post('/createMusyrif', [musyrifController::class, 'store'])->name('createMusyrif');

// // Jadwal Cuti
// Route::get('/jadwalCuti', [jadwalCutiController::class, 'index'])->name('jadwalCuti');
// Route::get('/createCuti', [jadwalCutiController::class, 'createCuti'])->name('createCuti');
// Route::get('/detailCuti', [jadwalCutiController::class, 'detailCuti'])->name('detailCuti');

// Auth::routes();
// Route::get('/dashboard', 'dashboardController@index')->name('dashboard');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// // Asrama
// Route::resource('/asrama', AsramaController::class);
// Route::get('/createAsrama', [AsramaController::class, 'createAsrama'])->name('createAsrama');
// Route::get('/editAsrama/{id}', [AsramaController::class, 'showAsrama'])->name('showAsrama');
// Route::patch('/editAsrama/{id}', [AsramaController::class, 'editAsrama']);
// Route::get('/detailAsrama/{id}', [dashboardController::class, 'detailAsrama']);

// // Santri
// Route::get('/detailSantri/{id}', [AsramaController::class, 'showSantri']);
// Route::get('/createSantri/{id}', [dashboardController::class, 'createSantri'])->name('createSantri');
// Route::post('/createSantri', [dashboardController::class, 'tambahSantri']);
// Route::post('/createAsrama', [AsramaController::class, 'store'])->name('/createAsrama');
// Route::patch('/detailSantri/{id}', [AsramaController::class, 'update']);
// Route::delete('/detailSantri/{id}', [AsramaController::class, 'destroy'])->name('deleteSantri');

// // Musyrif
// Route::resource('/musyrif', MusyrifController::class);
// Route::get('/detailMusyrif/{id}', [MusyrifController::class, 'show']);
// Route::patch('/detailMusyrif/{id}', [MusyrifController::class, 'update']);
// Route::get('/createMusyrif', [MusyrifController::class, 'createMusyrif'])->name('createMusyrif');
// Route::post('/createMusyrif', [MusyrifController::class, 'store']);
// Route::delete('/detailMusyrif/{id}', [MusyrifController::class, 'destroy'])->name('deleteMusyrif');
// Route::get('/musyrif/{id}', [musyrifController::class, 'show']);

// // Jadwal Cuti
// Route::resource('/cutiMusyrif', CutiMusyrifController::class);
// Route::get('/createCuti', [jadwalCutiController::class, 'createCuti'])->name('createCuti');
// Route::post('/createCuti', [jadwalCutiController::class, 'tambahCuti']);
// Route::get('/detailCuti/{id}', [CutiMusyrifController::class, 'show'])->name('detailCuti');
// Route::patch('/detailCuti/{id}', [CutiMusyrifController::class, 'update']);
// Route::delete('/detailCuti/{id}', [CutiMusyrifController::class, 'destroy']);

// Approve Data
// Route::post('/approve-data/{id}', [CutiMusyrifController::class, 'approve'])->name('approveRecord');

// // Decline Data
// Route::post('/decline-data/{id}', [CutiMusyrifController::class, 'decline'])->name('approveRecord');
