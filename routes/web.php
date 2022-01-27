<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index']);

Route::get('/masuk', [UserController::class, 'masuk']);

Route::get('/lupa-kata-sandi', [UserController::class, 'forgotPassword']);

Route::get('/perizinan-rubah-sifat', [UserController::class, 'rubahSifat']);

Route::get('/maps', [UserController::class, 'index']);

Route::post('/registrasi', [UserController::class, 'registrasi']);
