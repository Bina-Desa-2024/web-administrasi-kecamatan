<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string("nik");
            $table->string("nama");
            $table->string("tempat");
            $table->date("tgl_lahir");
            $table->string("jenis_kelamin");
            $table->string("pekerjaan");
            $table->string("agama");
            $table->string("jalan");
            $table->string("rt");
            $table->string("rw");
            $table->string("desa");
            $table->string("dusun");
            $table->string("kecamatan");
            $table->string("no_kk");
            $table->string("kota");
            $table->string("status_perkawinan");
            $table->string("kewarganegaraan");
            $table->string("pend_terakhir");
            $table->string("pend_ditempuh");
            $table->string("status_dalam_keluarga");
            $table->string("nama_ayah");
            $table->string("nama_ibu");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};
