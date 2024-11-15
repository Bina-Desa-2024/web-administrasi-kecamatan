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
        Schema::create('suratizinkeramaians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("jenis_surat")->default('surat_izin_keramaian');
            $table->string("nama");
            $table->string("nik");
            $table->string("jenis_kelamin");
            $table->string("pekerjaan");
            $table->string("agama");
            $table->string("rt");
            $table->string("rw");
            $table->string("desa");
            $table->string("dusun");
            $table->string("kecamatan");
            $table->string("kota");
            $table->text("keterangan_keramaian");
            $table->date("dimulai_keramaian");
            $table->date("berakhir_keramaian");
            $table->string("lokasi_keramaian");
            $table->string("keterangan");
            $table->string("status_surat")->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratizinkeramaians');
    }
};
