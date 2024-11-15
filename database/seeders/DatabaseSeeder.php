<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use App\Models\User;
use App\Models\Daftarsurat;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Penduduk::create([
            'nik' => '3201234567890001',
            'nama' => 'Ahmad Fauzi',
            'tempat' => 'Bandung',
            'tgl_lahir' => '1990-01-15',
            'jenis_kelamin' => 'Laki-laki',
            'pekerjaan' => 'Petani',
            'agama' => 'Islam',
            'jalan' => 'Jl. Sukamaju No. 10',
            'rt' => '02',
            'rw' => '04',
            'desa' => 'Sukamaju',
            'dusun' => 'Dusun I',
            'kecamatan' => 'Ciparay',
            'no_kk' => '3201234567890001',
            'kota' => 'Bandung',
            'pend_terakhir' => 'SMA',
            'pend_ditempuh' => 'SMA',
            'status_perkawinan' => 'Kawin',
            'status_dalam_keluarga' => 'Kepala Keluarga',
            'kewarganegaraan' => 'WNI',
            'nama_ayah' => 'Budi Santoso',
            'nama_ibu' => 'Siti Aminah',
        ]);
        User::create([
            'username' => 'admin',
            'password' => bcrypt('1234')
        ]);
        Daftarsurat::create(['nama_surat' => 'Surat Keterangan Tidak Mampu']);
        Daftarsurat::create(['nama_surat' => 'Suret Keterangan Usaha']);
        Daftarsurat::create(['nama_surat' => 'Surat Izin Keramaian']);
        $pegawaiData = [
            [
                'nama' => 'HADI AFRIANSYAH, S.T',
                'jabatan' => 'PJ.Kepala Desa',
                'nip' => '19780422 200903 1 001',
            ],
            [
                'nama' => 'MUKHLIS',
                'jabatan' => 'Sekretaris Desa',
                'nip' => null,
            ],
            [
                'nama' => 'WIRA SRI MULYANI',
                'jabatan' => 'KAUR KEUANGAN',
                'nip' => null,
            ],
            [
                'nama' => 'BOBBY AVANDA PUTRA',
                'jabatan' => 'KAUR UMUM DAN PERENCANAAN',
                'nip' => null,
            ],
            [
                'nama' => null,
                'jabatan' => 'KASI PEMERINTAHAN',
                'nip' => null,
            ],
            [
                'nama' => 'MAHILA',
                'jabatan' => 'KASI PELAYAN DAN KESEJAHTERAAN',
                'nip' => null,
            ],
            [
                'nama' => 'ANI RAMAYANI',
                'jabatan' => 'STAFF PENATA ASET',
                'nip' => null,
            ],
            [
                'nama' => 'CHAIRUL ANAM',
                'jabatan' => 'KADUS GUNTUR',
                'nip' => null,
            ],
            [
                'nama' => 'YUDI',
                'jabatan' => 'KADUS',
                'nip' => null,
            ],
            [
                'nama' => 'KHAERUDIN',
                'jabatan' => 'KADUS',
                'nip' => null,
            ],
        ];

        // foreach ($pegawaiData as $data) {
        //     Pegawai::create($data);
        // }
    }
}
