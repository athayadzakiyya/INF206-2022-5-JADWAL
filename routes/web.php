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

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login', [UserController::class, 'loginUser']);

Route::POST('/login_Proses_User', [UserController::class, 'loginProsesUser']);

Route::get('/login_admin', function () {
    return view('login_admin');
});

// Route::get('/absensi', function () {
//     return view('absensi');
// });

Route::get('/absensi', [JadwalController::class, 'absensi']);

Route::get('/absensi_admin', [JadwalController::class, 'absensiAdmin']);


// Route::get('/jadwal_tenaga_medis', function () {
//     return view('jadwal_tenaga_medis');
// });

// Route::get('/jadwal_tenaga_medis_admin', function () {
//     return view('jadwal_tenaga_medis_admin');
// });

Route::get('/jadwal_tenaga_medis_admin', [JadwalController::class, 'jadwalTenagaMedisAdmin']);


// Route::get('/bantuan', function () {
//     return view('bantuan');
// });

Route::get('/bantuan', [NotifController::class, 'bantuan']);


// Route::get('/jadwal_saya', function () {
//     return view('jadwal_saya');
// });

Route::get('/jadwal_saya', [JadwalController::class, 'jadwalSaya']);


// Route::get('/pemberitahuan_admin', function () {
//     return view('pemberitahuan_admin');
// });

Route::get('/pemberitahuan_admin', [NotifController::class, 'pemberitahuanAdmin']);

Route::get('/pemberitahuan', [NotifController::class, 'pemberitahuan']);

Route::get('/jadwal_tenaga_medis', [JadwalController::class, 'jadwalTenagaMedis']);