<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Suketusaha;
use App\Models\Sukettidakmampu;
use App\Models\Suratizinkeramaian;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function konfirmasiNik(Request $request)
    {
        $request->validate([
            'nik' => 'required',
        ]);

        $nik = $request->input('nik');
        // dd($nik);
        $penduduk = Penduduk::where('nik', $nik)->first();
        // dd($penduduk);
        
        // Jika `nik` ditemukan, redirect ke halaman lain dengan session
        if ($penduduk) {
            // Set session untuk izin akses halaman berikutnya
            if ($request->input('jenis_surat') == 'Surat Keterangan Usaha') {
                $jenis_surat = $request->input('jenis_surat');
                return redirect("/suket-usaha")->with('penduduk', $penduduk)->with('jenis_surat',$jenis_surat);
            } else if($request->input('jenis_surat') == 'Surat Keterangan Tidak Mampu'){
                $jenis_surat = $request->input('jenis_surat');
                return redirect("/suket-tidak-mampu")->with('penduduk', $penduduk)->with('jenis_surat',$jenis_surat);
            }else if($request->input('jenis_surat') == 'Surat Izin Keramaian'){
                $jenis_surat = $request->input('jenis_surat');
                return redirect("/surat-izin-keramaian")->with('penduduk', $penduduk)->with('jenis_surat',$jenis_surat);
            }
            else {
                return redirect('/'); // Tambahkan 'return' di sini
            }
        }

        // Jika `nik` tidak ditemukan, kembali dengan pesan error
        return back()->with('error', 'Nik tidak ada di data');
    }

    public function submitSurat(Request $request)
    {
        // dd($request);
        $jenis_surat = $request->input('jenis_surat');
        // dd($jenis_surat);
        if ($jenis_surat == 'Surat Keterangan Usaha') {
            $validatedData = $request->validate([
                'nama' => 'required',
                'tempat' => 'required',
                'tgl_lahir' => 'required',
                'pekerjaan' => 'required',
                'alamat' => 'required',
                'desa' => 'required',
                'kecamatan' => 'required',
                'kota' => 'required',
                'nama_usaha' => 'required',
                'alamat_usaha' => 'required',
                'desa_usaha' => 'required',
                'kecamatan_usaha' => 'required',
                'jenis_tempat' => 'required',
                'status_tempat' => 'required',
                'bidang_usaha' => 'required',
                'bentuk_usaha' => 'required',
                'modal_usaha' => 'required',
                'tenaga_kerja' => 'required',
                'mulai_usaha' => 'required',
            ]);
            Suketusaha::create($validatedData);
            return redirect('/')->with('success', 'Surat berhasil direquest, silahkan datang ke desa setelah 2/3 hari kerja untuk mengambil surat tersebut');
        } elseif($jenis_surat == 'Surat Keterangan Tidak Mampu'){
            // dd($request);
            $validatedData = $request->validate([
                'nama' => 'required',
                'tempat' => 'required',
                'tgl_lahir' => 'required',
                'pekerjaan' => 'required',
                'nik' => 'required',
                'alamat' => 'required',
                'nama_tidak_mampu' => 'required',
                'tempat_tidak_mampu' => 'required',
                'tgl_lahir_tidak_mampu' => 'required',
                'nik_tidak_mampu' => 'required',
                'alamat_tidak_mampu' => 'required',
            ]);
            
            Sukettidakmampu::create($validatedData);
            return redirect('/')->with('success', 'Surat berhasil direquest, silahkan datang ke desa setelah 2/3 hari kerja untuk mengambil surat tersebut');
        }elseif($jenis_surat == 'Surat Izin Keramaian'){
            $validatedData = $request->validate([
                'nama' => 'required',
                'nik' => 'required',
                'jenis_kelamin' => 'required',
                'pekerjaan' => 'required',
                'agama' => 'required',
                'alamat' => 'required',
                'keterangan_keramaian' => 'required',
                'dimulai_keramaian' => 'required',
                'berakhir_keramaian' => 'required',
                'lokasi_keramaian' => 'required',
            ]);
            Suratizinkeramaian::create($validatedData);
            return redirect('/')->with('success', 'Surat berhasil direquest, silahkan datang ke desa setelah 2/3 hari kerja untuk mengambil surat tersebut');
        }
        else {
            return redirect('/')->with('error', 'Surat gagal masuk');
        }
        
    }
    public function konfirmasiPermintaanSurat($id, $jenis_surat){
        // dd($jenis_surat);
        switch ($jenis_surat) {
            case 'suket_usaha':
                $suketusaha = Suketusaha::find($id);
                return view('/Dashboard Admin/permintaan-surat/permintaan-suket-usaha', compact('suketusaha'));
            case 'surat_izin_keramaian':
                $suratizinkeramaian = Suratizinkeramaian::find($id);
                return view('/Dashboard Admin/permintaan-surat/permintaan-surat-izin-keramaian', compact('suratizinkeramaian'));
            case 'suket_tidak_mampu':
                $sukettidakmampu = Sukettidakmampu::find($id);
                return view('/Dashboard Admin/permintaan-surat/permintaan-suket-tidak-mampu', compact('sukettidakmampu'));
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
            case 'surat_izin_keramaian':
                $validatedData = $request->validate([
                    'status_surat'=>'required'
                ]);
                Suratizinkeramaian::where('id',$id)->update($validatedData);
                return redirect('/SuratSelesai');
            case 'suket_tidak_mampu':
                $validatedData = $request->validate([
                    'status_surat'=>'required'
                ]);
                Sukettidakmampu::where('id',$id)->update($validatedData);
                return redirect('/SuratSelesai');
            default:
                abort(404, 'Jenis surat tidak ditemukan');
        }
    }

    public function cetakSurat($id, $jenis_surat){
        switch ($jenis_surat) {
            case 'suket_usaha':
                $suketusaha = Suketusaha::find($id);
                return view('/Dashboard Admin/cetak-surat/cetak-suket-usaha', compact('suketusaha'));
            case 'surat_izin_keramaian':
                $suratizinkeramaian = Suratizinkeramaian::find($id);
                return view('/Dashboard Admin/cetak-surat/cetak-surat-izin-keramaian', compact('suratizinkeramaian'));
            case 'suket_tidak_mampu':
                $sukettidakmampu = Sukettidakmampu::find($id);
                return view('/Dashboard Admin/cetak-surat/cetak-suket-tidak-mampu', compact('sukettidakmampu'));
            default:
                abort(404, 'Jenis surat tidak ditemukan');
        }
    }

}
