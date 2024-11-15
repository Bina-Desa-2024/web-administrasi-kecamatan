<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Models\Penduduk;
use App\Models\Suketusaha;
use App\Models\Suketkelakuanbaik;
use App\Models\Sukettidakmampu;

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
    return view('enduser.konfirmasinik', ['jenis_surat'=> $jenis]);
});
Route::post('/konfirmasi-nik', [SuratController::class, 'konfirmasiNik']);
Route::get('/isisurat', function () {
    return view('enduser.isisurat');
});
// surat-surat
Route::get('/suratizinkeramain', function () {
    return view('surats.suratizinkeramain');
});
Route::get('/suket-usaha', function () {
    return view('surats.suket-usaha');
});
Route::post('/suket-usaha', [SuratController::class, 'submitSuketUsaha']);
// login
Route::get('/loginadmin', function () {
    return view('login');
});
Route::post('/adminlogin', [AuthController::class, 'masuk']);
Route::post('/logout', [AuthController::class, 'keluar']);
Route::get('/Dashboard', function () {
    $models = [
        Suketusaha::class,
        Sukettidakmampu::class,
        Suketkelakuanbaik::class
    ];
    $completedCount = 0;
    $pendingCount = 0;
    foreach ($models as $model) {
        $completedCount += $model::where('status_surat', 'completed')->count();
        $pendingCount += $model::where('status_surat', 'pending')->count();
    }
    $pendudukCount = Penduduk::count();
    return view('Dashboard Admin.index', compact('pendudukCount', 'completedCount', 'pendingCount'));
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
    $models = [
        Suketusaha::class,
        Sukettidakmampu::class,
        Suketkelakuanbaik::class,
    ];
    $suratPending = collect();
    foreach ($models as $model) {
        $suratPending = $suratPending->concat(
            $model::where('status_surat', 'pending')->get()
        );
    }
    return view('Dashboard Admin.PermintaanSurat', compact('suratPending'));
});
Route::get('/konfirmasi-surat/{id}/{jenis_surat}', [SuratController::class, 'konfirmasiPermintaanSurat']);
Route::put('/selesai-surat', [SuratController::class, 'suratSelesai']);
Route::get('/SuratSelesai', function () {
    $models = [
        Suketusaha::class,
        Sukettidakmampu::class,
        Suketkelakuanbaik::class,
    ];
    $suratCompleted = collect();
    foreach ($models as $model) {
        $suratCompleted = $suratCompleted->concat(
            $model::where('status_surat', 'completed')->get()
        );
    }
    return view('Dashboard Admin.SuratSelesai', compact('suratCompleted'));
});
Route::get('/cetak-surat/{id}/{jenis_surat}', [SuratController::class, 'cetakSurat']);
Route::get('/TambahData', function () {
    return view('Dashboard Admin.TambahData');
});