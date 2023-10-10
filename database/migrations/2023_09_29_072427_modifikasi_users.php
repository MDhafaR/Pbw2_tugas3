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
        Schema::table('users', function (Blueprint $table) {
            // Muhammad Dhafa Ramadhani - 6706223068 - 4604
            // penambahan kolom baru
            $table->string('username',100);
            $table->string('address',1000);
            $table->string('phoneNumber',20);
            $table->date('birthdate')->nullable();

            // memodifikasi kolom
            $table->renameColumn('name','fullName');
            $table->string('email')->nullable()->change();
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
