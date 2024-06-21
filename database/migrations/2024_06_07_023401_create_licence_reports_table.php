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
        Schema::create('licence_report', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('tipe_bisnis');
            $table->string('kategori');
            $table->string('klasifikasi');
            $table->string('tipe_izin');
            $table->string('nib');
            $table->string('nomor_izin');
            $table->string('tanggal_terbit_izin');
            $table->string('tanggal_habis_izin');
            $table->string('status');
            $table->string('status_perizinan');
            $table->string('status_db');
            $table->string('status_lanjut');
            $table->string('keterangan')->nullable();
            $table->string('approve');
            $table->string('progress');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licence_reports');
    }
};
