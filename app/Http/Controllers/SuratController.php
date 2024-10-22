<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function buatSurat(Request $request)
    {
        // Ambil data "jenis_surat" dari request
        $jenisSurat = $request->input('jenis_surat');

        // Redirect ke view lain dengan data yang dikirim
        return view('konfirmasisurat', ['jenis_surat' => $jenisSurat]);
    }
}
