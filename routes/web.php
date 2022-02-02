<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/perizinan-rubah-bentuk', [UserController::class, 'rubahBentuk']);

Route::get('/maps', [UserController::class, 'index']);

Route::post('/registrasi', [UserController::class, 'registrasi']);


Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/data-rubah-sifat', [AdminController::class, 'rubahSifat']);
Route::get('/admin/data-rubah-bentuk', [AdminController::class, 'rubahBentuk']);
Route::get('/admin/data-qr-code', [AdminController::class, 'qrCode']);
Route::get('/admin/generate-qrcode-rubah-sifat', [AdminController::class, 'generateRubahSifat']);
Route::get('/admin/generate-qrcode-rubah-bentuk', [AdminController::class, 'generateRubahBentuk']);
