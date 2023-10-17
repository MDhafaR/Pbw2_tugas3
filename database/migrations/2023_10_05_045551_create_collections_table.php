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
        // Muhammad Dhafa Ramadhani - 6706223068 - 4604
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('namaKoleksi',100);
            $table->tinyInteger('jenisKoleksi');
            $table->date('createdAt');
            $table->integer('jumlahKoleksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
