<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ValidasiSifatController;
use App\Http\Controllers\ValidasiBentukController;
use App\Http\Controllers\GenerateQRController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\PdfController;

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
Route::post('/laporan', [UserController::class, 'storeLaporan']);
Route::post('/masuk', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/qr-code/perizinan-rubah-sifat/{formSifat}', [QrCodeController::class, 'detailValidSifat']);

Route::get('/lupa-kata-sandi', [UserController::class, 'forgotPassword']);

Route::middleware(['auth'])->group( function(){

    Route::get('/profile', [UserController::class, 'profile']);
    Route::patch('/profile', [UserController::class, 'editProfile']);

    Route::get('/alur-kordinasi', [UserController::class, 'alurKordinasi']);
    Route::get('/alur-kordinasi/rubah-sifat/download-surat/{formSifat}', [PdfController::class, 'generateSifat']);
    Route::get('/alur-kordinasi/rubah-bentuk/download-surat/{formBentuk}', 'App\Http\Controllers\PdfController@generateBentuk');

    Route::get('/perizinan-rubah-sifat', [UserController::class, 'rubahSifat']);
    Route::post('/perizinan-rubah-sifat', [UserController::class, 'storeSifat']);

    Route::get('/perizinan-rubah-bentuk', [UserController::class, 'rubahBentuk']);
    Route::post('/perizinan-rubah-bentuk', [UserController::class, 'storeBentuk']);

});


Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/dashboard/detail/{user}', [AdminController::class, 'show']);
Route::get('/admin/dashboard/edit/{user}', [AdminController::class, 'viewEditIndex']);
Route::patch('/admin/dashboard/edit/{user}', [AdminController::class, 'storeEditIndex']);

Route::get('/admin/data-rubah-sifat', [AdminController::class, 'rubahSifat']);
Route::get('/admin/data-rubah-sifat/detail/{formSifat}', [AdminController::class, 'detailRubahSifat']);
Route::get('/admin/data-rubah-sifat/edit/{formSifat}', [AdminController::class, 'viewEditSifat']);
Route::patch('/admin/data-rubah-sifat/edit/{formSifat}', [AdminController::class, 'storeEditSifat']);
Route::get('/download-berkas-surat-permohonan/{namaFile}', [AdminController::class, 'berkasPermohonan']);
Route::get('/download-berkas-surat-pernyataan/{namaFile}', [AdminController::class, 'berkasPernyataan']);


Route::get('/admin/data-rubah-bentuk', [AdminController::class, 'rubahBentuk']);
Route::get('/admin/data-rubah-bentuk/detail/{formBentuk}', [AdminController::class, 'detailRubahBentuk']);
Route::get('/admin/data-rubah-bentuk/edit/{formBentuk}', [AdminController::class, 'viewEditBentuk']);
Route::patch('/admin/data-rubah-bentuk/edit/{formBentuk}', [AdminController::class, 'storeEditBentuk']);

Route::get('/admin/data-qr-code/rubah-sifat', [QrCodeController::class, 'viewSifat']);
Route::get('/admin/data-qr-code/rubah-sifat/lihat-surat/{formSifat}', [QrCodeController::class, 'lihatSuratSifat']);
Route::get('/admin/data-qr-code/rubah-sifat/download-surat/{formSifat}', [PdfController::class, 'generateSifat']);


Route::get('/admin/data-qr-code/rubah-bentuk', [QrCodeController::class, 'viewBentuk']);
Route::get('/admin/data-qr-code/rubah-bentuk/lihat-surat/{formBentuk}', [QrCodeController::class, 'lihatSuratBentuk']);
Route::get('/admin/data-qr-code/rubah-bentuk/download-surat/{formBentuk}', [PdfController::class, 'generateBentuk']);

Route::get('/admin/generate-qrcode-rubah-sifat', [GenerateQRController::class, 'viewGenerateRubahSifat']);
Route::post('/admin/generate-qrcode-rubah-sifat/{formSifat}', [GenerateQRController::class, 'generateSifat']);

Route::get('/admin/generate-qrcode-rubah-bentuk', [GenerateQRController::class, 'viewGenerateRubahBentuk']);
Route::post('/admin/generate-qrcode-rubah-bentuk/{formBentuk}', [GenerateQRController::class, 'generateBentuk']);

Route::get('/admin/validasi/rubah-sifat', [ValidasiSifatController::class, 'index']);
Route::get('/admin/validasi/rubah-sifat/staff-angkutan/{formSifat}', [ValidasiSifatController::class, 'staff']);
Route::get('/admin/validasi/rubah-sifat/kasi-angkutan/{formSifat}', [ValidasiSifatController::class, 'kasi']);
Route::get('/admin/validasi/rubah-sifat/kabid-lla/{formSifat}', [ValidasiSifatController::class, 'kabid']);
Route::get('/admin/validasi/rubah-sifat/sekretariat/{formSifat}', [ValidasiSifatController::class, 'sekretariat']);
Route::get('/admin/validasi/rubah-sifat/kepala-dinas/{formSifat}', [ValidasiSifatController::class, 'kepalaDinas']);

Route::get('/admin/validasi/rubah-bentuk', [ValidasiBentukController::class, 'index']);
Route::get('/admin/validasi/rubah-bentuk/kasi/{formBentuk}', [ValidasiBentukController::class, 'kasi']);
Route::get('/admin/validasi/rubah-bentuk/kabid/{formBentuk}', [ValidasiBentukController::class, 'kabid']);
Route::get('/admin/validasi/rubah-bentuk/sekretaris/{formBentuk}', [ValidasiBentukController::class, 'sekretaris']);
Route::get('/admin/validasi/rubah-bentuk/kepala-dinas/{formBentuk}', [ValidasiBentukController::class, 'kepalaDinas']);

Route::get('/admin/laporan', [AdminController::class, 'laporan']);