<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/registro', [PublicController::class, 'registro'])->name('registro');
Route::post('/registro', [PublicController::class, 'registroCita'])->name('registroCita');
Route::post('/consulta-citas', [PublicController::class, 'consultaCitasDisponibles'])->name('consultaCitas');