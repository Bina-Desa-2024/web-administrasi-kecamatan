<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Models\Penduduk;
use App\Models\Suketusaha;

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
Route::get('/suket-kelakuan-baik', function () {
    return view('surats.suket-kelakuan-baik');
});
Route::get('/suratizinkeramain', function () {
    return view('surats.suratizinkeramain');
});
Route::get('/suket-usaha', function () {
    return view('surats.suket-usaha');
});
Route::post('/suket-usaha', [SuratController::class, 'submitSuketUsaha']);
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
    $pendudukCount = Penduduk::count();
    $suketusahaPendingCount = Suketusaha::where('status_surat', 'pending')->count();
    $suketusahaCompletedCount = Suketusaha::where('status_surat', 'completed')->count();
    return view('Dashboard Admin.index', compact('pendudukCount', 'suketusahaCompletedCount', 'suketusahaPendingCount'));
});

Route::get('/DataPenduduk', function () {
    return view('Dashboard Admin.Datapenduduk', [
        'penduduks' => Penduduk::all()
    ]);
});
Route::get('/coba', function () {
    return view('surats.text');
});
Route::get('/PermintaanSurat', function () {
    return view('Dashboard Admin.PermintaanSurat', [
        'suratPending' => Suketusaha::where('status_surat','pending')->get()
    ]);
});
Route::get('/konfirmasi-suket-usaha/{suketusaha}', [SuratController::class, 'konfirmasiSuketUsaha']);
Route::put('/selesai-suket-usaha/{suketusaha}', [SuratController::class, 'suratSelesaiSuketUsaha']);
Route::get('/SuratSelesai', function () {
    return view('Dashboard Admin.SuratSelesai');
});

Route::get('/TambahData', function () {
    return view('Dashboard Admin.TambahData');
});