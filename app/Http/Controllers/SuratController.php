<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function konfirmasiSurat(Request $request)
    {
        $request->validate([
            'nik' => 'required',
        ]);

        // Cari `nik` di tabel `penduduks`
        $nik = $request->input('nik');
        $penduduk = Penduduk::where('nik', $nik)->first();

        // Jika `nik` ditemukan, redirect ke halaman lain dengan session
        if ($penduduk) {
            // Set session untuk izin akses halaman berikutnya
            if ($request->input('jenis_surat') == 'a') {
                return redirect("/suket-kelakuan-baik")->with('penduduk', $penduduk);
            } else {
                return redirect('/'); // Tambahkan 'return' di sini
            }
        }

        // Jika `nik` tidak ditemukan, kembali dengan pesan error
        return back()->withErrors(['nik' => 'NIK tidak ditemukan di database.']);
    }
    public function submitSuketUsaha(Request $request){

    }
}
