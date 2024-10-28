<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;

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
    return view('enduser.index');
})->name('/');

Route::get('/buatsurat', function () {
    return view('enduser.buatsurat');
});

Route::get('/tentang', function () {
    return view('enduser.tentang');
});
Route::get('/buat-surat/{jenis}', function ($jenis) {
    return view('enduser.konfirmasisurat', ['jenis_surat'=> $jenis]);
});
Route::post('/konfirmasi-surat', [SuratController::class, 'konfirmasiSurat']);
Route::get('/isisurat', function () {
    return view('enduser.isisurat');
});
// surat-surat
Route::get('/suketkelakuanbaik', function () {
    return view('surats.suketkelakuanbaik');
});
Route::get('/suratizinkeramain', function () {
    return view('surats.suratizinkeramain');
});
Route::get('/suketusaha', function () {
    return view('surats.suketusaha');
});
Route::get('/suketbedanama', function () {
    return view('surats.suketbedanama');
});
Route::get('/suketahliwaris', function () {
    return view('surats.suketahliwaris');
});
Route::get('/suketbelummenikah', function () {
    return view('surats.suketbelummenikah');
});
Route::get('/suketkematian', function () {
    return view('surats.suketkematian');
});
Route::get('/suratpenetapanbpd', function () {
    return view('surats.suratpenetapanbpd');
});
Route::get('/suratpenyerahantanah', function () {
    return view('surats.suratpenyerahantanah');
});
Route::get('/superahliwaris', function () {
    return view('surats.superahliwaris');
});
Route::get('/supertanah', function () {
    return view('surats.supertanah');
});
// login
Route::get('/loginadmin', function () {
    return view('login');
});
Route::post('/adminlogin', [AuthController::class, 'masuk']);
Route::post('/logout', [AuthController::class, 'keluar']);
Route::get('/Dashboard', function () {
    return view('Dashboard Admin.index');
});

Route::get('/DataPenduduk', function () {
    return view('Dashboard Admin.Datapenduduk');
});
Route::get('/coba', function () {
    return view('surats.text');
});
Route::get('/PermintaanSurat', function () {
    return view('Dashboard Admin.PermintaanSurat');
});

Route::get('/SuratSelesai', function () {
    return view('Dashboard Admin.SuratSelesai');
});

Route::get('/TambahData', function () {
    return view('Dashboard Admin.TambahData');
});