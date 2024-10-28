<?php

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
Route::get('/suratketerangan', function () {
    return view('surats.suratketerangan');
});
Route::get('/loginadmin', function () {
    return view('login');
});

Route::get('/Dashboard', function () {
    return view('Dashboard Admin.index');
});

Route::get('/DataPenduduk', function () {
    return view('Dashboard Admin.Datapenduduk');
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