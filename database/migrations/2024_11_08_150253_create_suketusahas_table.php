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
        Schema::create('suketusahas', function (Blueprint $table) {
            $table->id();
            $table->string("jenis_surat")->default('suket_usaha');
            $table->string("nama");
            $table->string("tempat");
            $table->date("tgl_lahir");
            $table->string("pekerjaan");
            $table->string("rt");
            $table->string("rw");
            $table->string("desa");
            $table->string("dusun");
            $table->string("kecamatan");
            $table->string("kota");
            $table->string("nama_usaha");
            $table->string("alamat_usaha");
            $table->string("desa_usaha");
            $table->string("kecamatan_usaha");
            $table->string("bidang_usaha");
            $table->string("jenis_tempat");
            $table->string("status_tempat");
            $table->string("bentuk_usaha");
            $table->string("modal_usaha");
            $table->string("tenaga_kerja");
            $table->date("mulai_usaha");
            $table->string("status_surat")->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suketusahas');
    }
};
