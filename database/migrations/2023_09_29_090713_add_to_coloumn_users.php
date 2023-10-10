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
        Schema::table('users', function (Blueprint $table) {
            // nambah kolom agama
            $table->string('agama',20);
            // nambah kolom jenis kelamin
            $table->tinyInteger('jenis_kelamin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
