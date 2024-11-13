<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Suketusaha;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function konfirmasiNik(Request $request)
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
    public function konfirmasiPermintaanSurat($id, $jenis_surat){
        // dd($jenis_surat);
        switch ($jenis_surat) {
            case 'suket_usaha':
                $suketusaha = Suketusaha::find($id);
                return view('/Dashboard Admin/permintaan-surat/permintaan-suket-usaha', compact('suketusaha'));
            case 'surat_kelakuan_baik':
                return view('/Dashboard Admin/permintaan-surat/permintaan-suket-domisili', compact('suketdomisili'));
            case 'suket_tidak_mampu':
                return 0;
            default:
                abort(404, 'Jenis surat tidak ditemukan');
        }
    }

    public function suratSelesai(Request $request){
        // dd($request);
        $jenis_surat = $request->jenis_surat;
        $id = $request->id;
        switch ($jenis_surat) {
            case 'suket_usaha':
                $validatedData = $request->validate([
                    'status_surat'=>'required'
                ]);
                Suketusaha::where('id',$id)->update($validatedData);
                return redirect('/SuratSelesai');
            case 'surat_kelakuan_baik':
                return view('/Dashboard Admin/permintaan-surat/permintaan-suket-domisili', compact('suketdomisili'));
            case 'suket_tidak_mampu':
                return 0;
            default:
                abort(404, 'Jenis surat tidak ditemukan');
        }
    }

    public function cetakSurat($id, $jenis_surat){
        switch ($jenis_surat) {
            case 'suket_usaha':
                $suketusaha = Suketusaha::find($id);
                return view('/Dashboard Admin/cetak-surat/cetak-suket-usaha', compact('suketusaha'));
            case 'surat_kelakuan_baik':
                return view('/Dashboard Admin/permintaan-surat/permintaan-suket-domisili', compact('suketdomisili'));
            case 'suket_tidak_mampu':
                return 0;
            default:
                abort(404, 'Jenis surat tidak ditemukan');
        }
    }

}
