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
        Schema::create('rating_m', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->index();
            $table->boolean('statusenabled')->default(1);
            $table->string('nama')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->foreignId('gambar_id')->constrained('file_t');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating_m');
    }
};
