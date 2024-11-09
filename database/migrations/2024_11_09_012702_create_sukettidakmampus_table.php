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
        Schema::create('sukettidakmampus', function (Blueprint $table) {
            $table->id();
            $table->string("jenis_surat")->default('suket_tidak_mampu');
            $table->string("nama");
            $table->string("tempat");
            $table->date("tgl_lahir");
            $table->string("pekerjaan");
            $table->string("nik");
            $table->string("rt");
            $table->string("rw");
            $table->string("desa");
            $table->string("dusun");
            $table->string("kecamatan");
            $table->string("kota");
            $table->string("nama_tidak_mampu");
            $table->string("tempat_tidak_mampu");
            $table->date("tgl_lahir_tidak_mampu");
            $table->string("nik_tidak_mampu");
            $table->string("rt_tidak_mampu");
            $table->string("rw_tidak_mampu");
            $table->string("desa_tidak_mampu");
            $table->string("dusun_tidak_mampu");
            $table->string("kecamatan_tidak_mampu");
            $table->string("kota_tidak_mampu");
            $table->string("status_surat")->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sukettidakmampus');
    }
};
