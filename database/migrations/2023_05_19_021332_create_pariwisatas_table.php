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
        Schema::create('pariwisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('paket_wisata');
            $table->string('harga');
            $table->date('tgl_reservasi');
            $table->string('no_tlp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pariwisatas');
    }
};
