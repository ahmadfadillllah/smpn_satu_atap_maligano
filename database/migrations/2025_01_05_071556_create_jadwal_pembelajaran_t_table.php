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
        Schema::create('jadwal_pembelajaran_t', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->index();
            $table->boolean('statusenabled')->default(1);
            $table->string('hari')->nullable();
            $table->foreignId('kelas_id')->constrained('kelas_m');
            $table->foreignId('pelajaran_id')->constrained('nama_pelajaran_m');
            $table->time('jam_masuk')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->string('semester')->nullable();
            $table->string('tahun_ajaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pembelajaran_t');
    }
};
