<?php

namespace Database\Seeders;

use App\Models\Penduduk;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        Penduduk::create([
            'nik' => '1234567890',
            'nama' => 'Siti Aisyah',
            'tempat_tgl_lahir' => 'Jakarta, 01-01-1990',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'alamat' => 'Jl. Kebon Jeruk No. 10'
        ]);
    }
}
