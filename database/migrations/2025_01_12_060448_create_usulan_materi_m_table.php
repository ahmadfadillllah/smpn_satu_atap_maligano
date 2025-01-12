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
        Schema::create('usulan_materi_m', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->index();
            $table->boolean('statusenabled')->default(1);
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('materi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_materi_m');
    }
};
