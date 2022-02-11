<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::post('/', [LoginController::class, 'registrasi']);

Route::get('/masuk', [UserController::class, 'masuk'])->name('login');
Route::post('/masuk', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/lupa-kata-sandi', [UserController::class, 'forgotPassword']);

Route::middleware(['auth'])->group( function(){

    Route::get('/perizinan-rubah-sifat', [UserController::class, 'rubahSifat']);
    Route::post('/perizinan-rubah-sifat', [UserController::class, 'storeSifat']);

    Route::get('/perizinan-rubah-bentuk', [UserController::class, 'rubahBentuk']);
    Route::post('/perizinan-rubah-bentuk', [UserController::class, 'storeBentuk']);

});


Route::get('/admin/dashboard', [AdminController::class, 'index']);

Route::get('/admin/dashboard/detail/{user}', [AdminController::class, 'show']);

Route::get('/admin/data-rubah-sifat', [AdminController::class, 'rubahSifat']);
Route::get('/admin/data-rubah-sifat/detail/{{formSifat}}', [AdminController::class, 'detailRubahSifat']);

Route::get('/admin/data-rubah-bentuk', [AdminController::class, 'rubahBentuk']);
Route::get('/admin/data-rubah-bentuk/detail/{{formBentuk}}', [AdminController::class, 'detailRubahBentuk']);

Route::get('/admin/data-qr-code', [AdminController::class, 'qrCode']);
Route::get('/admin/generate-qrcode-rubah-sifat', [AdminController::class, 'generateRubahSifat']);
Route::get('/admin/generate-qrcode-rubah-bentuk', [AdminController::class, 'generateRubahBentuk']);
