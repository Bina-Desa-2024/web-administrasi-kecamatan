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
            $table->string("alamat");
            $table->string("nama_tidak_mampu");
            $table->string("tempat_tidak_mampu");
            $table->date("tgl_lahir_tidak_mampu");
            $table->string("nik_tidak_mampu");
            $table->string("alamat_tidak_mampu");
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
