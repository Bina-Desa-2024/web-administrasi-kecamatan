<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendudukRequest;
use App\Models\Agama;
use App\Models\Darah;
use App\Models\Dusun;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Penduduk;
use App\Models\StatusHubunganDalamKeluarga;
use App\Models\StatusPerkawinan;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $penduduk = Penduduk::latest()->paginate(10);
        $totalPenduduk = Penduduk::all();

        if ($request->cari) {
            if ($request->cari == "Laki-laki") {
                $penduduk = Penduduk::where('jenis_kelamin', 1)->latest()->paginate(10);
            } elseif ($request->cari == "Perempuan") {
                $penduduk = Penduduk::where('jenis_kelamin', 2)->latest()->paginate(10);
            } else {
                $penduduk = Penduduk::where(function ($penduduk) use ($request) {
                    $penduduk->where('nik', 'like', "%$request->cari%");
                    $penduduk->orWhere('kk', 'like', "%$request->cari%");
                    $penduduk->orWhere('nama', 'like', "%$request->cari%");
                    $penduduk->orWhere('tempat_lahir', 'like', "%$request->cari%");
                    $penduduk->orWhere('tanggal_lahir', 'like', "%$request->cari%");
                    $penduduk->orWhere('nomor_paspor', 'like', "%$request->cari%");
                    $penduduk->orWhere('nomor_kitas_atau_kitap', 'like', "%$request->cari%");
                    $penduduk->orWhere('nik_ayah', 'like', "%$request->cari%");
                    $penduduk->orWhere('nama_ayah', 'like', "%$request->cari%");
                    $penduduk->orWhere('nik_ibu', 'like', "%$request->cari%");
                    $penduduk->orWhere('nama_ibu', 'like', "%$request->cari%");
                    $penduduk->orWhere('alamat', 'like', "%$request->cari%");
                })->latest()->paginate(10);
            }
        }

        $penduduk->appends(request()->input())->links();
        return view('penduduk.index', compact('penduduk', 'totalPenduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.create', [
            'agama'                         => Agama::all(),
            'darah'                         => Darah::all(),
            'dusun'                         => Dusun::all(),
            'pekerjaan'                     => Pekerjaan::all(),
            'pendidikan'                    => Pendidikan::all(),
            'pendidikan'                    => Pendidikan::all(),
            'status_hubungan_dalam_keluarga' => StatusHubunganDalamKeluarga::all(),
            'status_perkawinan'             => StatusPerkawinan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'nik' => 'required',
            "kk" => "required",
            "nama" => "required",
            "jenis_kelamin" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required",
            "darah_id" => "required",
            "agama_id" => "required",
            "pendidikan_id" => "required",
            "pekerjaan_id" => "required",
            "status_perkawinan_id" => "required",
            "status_hubungan_dalam_keluarga_id" => "required",
            "kewarganegaraan" => "required",
            "nomor_paspor" => "required",
            "nomor_kitas_atau_kitap" => "required",
            "nik_ayah" => "required",
            "nama_ayah" => "required",
            "nik_ibu" => "required",
            "nama_ibu" => "required",
            "alamat" => "required",

        ]);
        Penduduk::create($data);
        return redirect()->route('penduduk.index')->with('success', 'Penduduk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', [
            'agama'                         => Agama::all(),
            'darah'                         => Darah::all(),
            'dusun'                         => Dusun::all(),
            'pekerjaan'                     => Pekerjaan::all(),
            'pendidikan'                    => Pendidikan::all(),
            'pendidikan'                    => Pendidikan::all(),
            'status_hubungan_dalam_keluarga' => StatusHubunganDalamKeluarga::all(),
            'status_perkawinan'             => StatusPerkawinan::all(),
            'penduduk'                      => $penduduk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $data = $request->validated();
        $penduduk->update($data);
        return redirect()->back()->with('success', 'Penduduk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->back()->with('success', 'Penduduk berhasil diperbarui');
    }
}
