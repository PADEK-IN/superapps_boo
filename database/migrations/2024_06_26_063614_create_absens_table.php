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
        Schema::create('absens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_karyawan')->constrained(table:'karyawans', indexName:'absens_id_karyawan');
            $table->string('bukti', 100);
            $table->string('lokasi', 100);
            $table->enum('status', ['disetujui', 'tertunda', 'ditolak'])->default('tertunda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absens');
    }
};