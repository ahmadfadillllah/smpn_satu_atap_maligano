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
        Schema::create('profil_sekolah_m', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->index();
            $table->text('profile')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('nspn')->nullable();
            $table->text('sk_pendirian')->nullable();
            $table->text('sk_izin')->nullable();
            $table->text('bentuk_pendidikan')->nullable();
            $table->date('tanggal_sk_pendirian')->nullable();
            $table->date('tanggal_sk_izin')->nullable();
            $table->text('status_kepemilikan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_sekolah_m');
    }
};
