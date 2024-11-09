<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Suketusaha;
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
                return redirect("/suket-usaha")->with('penduduk', $penduduk);
            } else {
                return redirect('/'); // Tambahkan 'return' di sini
            }
        }

        // Jika `nik` tidak ditemukan, kembali dengan pesan error
        return back()->withErrors(['nik' => 'NIK tidak ditemukan di database.']);
    }
    public function submitSuketUsaha(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'pekerjaan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa' => 'required',
            'dusun' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'nama_usaha' => 'required',
            'alamat_usaha' => 'required',
            'desa_usaha' => 'required',
            'kecamatan_usaha' => 'required',
            'bidang_usaha' => 'required',
            'jenis_tempat' => 'required',
            'status_tempat' => 'required',
            'bentuk_usaha' => 'required',
            'modal_usaha' => 'required',
            'tenaga_kerja' => 'required',
            'mulai_usaha' => 'required',
        ]);
        Suketusaha::create($validatedData);
        return redirect('/')->with('success', 'Surat berhasil direquest, silahkan datang ke desa setelah 2/3 hari kerja untuk mengambil surat tersebut');
    }
    public function konfirmasiSuketUsaha(Suketusaha $suketusaha){
        // dd($suketusaha);
        return view('/Dashboard Admin/surats/konfirmasi-suket-usaha', [
            'suketusaha' => $suketusaha
        ]);
    }

    public function suratSelesaiSuketUsaha(Request $request, Suketusaha $suketusaha){
        // dd($request);
        $validatedData = $request->validate([
            'status_surat'=>'required'
        ]);
        Suketusaha::where('id',$suketusaha->id)->update($validatedData);
        return redirect('/SuratSelesai')->with('success', 'Surat berhasil direquest, silahkan datang ke desa setelah 2/3 hari kerja untuk mengambil surat tersebut');
    }

}
