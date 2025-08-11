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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Menggunakan id auto-increment sebagai primary key (konvensi Laravel)
            $table->string('nip', 20)->unique(); // NIP dijadikan kolom unik
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telp')->nullable(); // Kolom dari tabel guru
            $table->text('alamat')->nullable();   // Kolom dari tabel guru
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};