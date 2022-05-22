<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NotifController;
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


Route::get('/', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/logout_admin', function () {
    return view('logout_admin');
});

// Route::get('/login_admin', function () {
//     return view('login_admin');
// });

Route::get('/login', [UserController::class, 'loginUser']);

Route::get('/login_admin', [UserController::class, 'loginAdmin']);

Route::POST('/login_Proses_User', [UserController::class, 'loginProsesUser']);

Route::POST('/login_Proses_Admin', [UserController::class, 'loginProsesAdmin']);

Route::get('/absensi', [JadwalController::class, 'absensi']);

Route::get('/absensi_admin', [JadwalController::class, 'absensiAdmin']);


Route::get('/jadwal_tenaga_medis_admin', [JadwalController::class, 'jadwalTenagaMedisAdmin']);


Route::get('/bantuan', [NotifController::class, 'bantuan']);

Route::get('/ganti/{id}', [NotifController::class, 'ganti']);

Route::post('/request', [NotifController::class, 'request']);

Route::get('/jadwal_saya', [JadwalController::class, 'jadwalSaya']);

Route::get('/pemberitahuan_admin', [NotifController::class, 'pemberitahuanAdmin']);

Route::get('/pemberitahuan', [NotifController::class, 'pemberitahuan']);

Route::get('/jadwal_tenaga_medis', [JadwalController::class, 'jadwalTenagaMedis']);