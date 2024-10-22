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
Route::post('/enduser.buat-surat', [SuratController::class, 'buatSurat'])->name('surat.redirect');
Route::get('/loginadmin', function () {
    return view('login');
});

Route::get('/Dashboard', function () {
    return view('Dashboard Admin.index');
});