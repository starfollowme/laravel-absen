<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id(); // Primary key standar
            $table->unsignedBigInteger('murid_id'); // Foreign key ke tabel murid
            $table->unsignedBigInteger('user_id'); // Foreign key ke user yg mencatat absensi
            $table->date('tanggal');
            $table->time('jam_datang')->nullable();

            // Menggabungkan 'Status' dan 'StatusAbsensi' menjadi satu kolom enum yang jelas
            $table->enum('status', ['Hadir', 'Sakit', 'Izin', 'Alpha', 'Terlambat']);

            $table->string('keterangan')->nullable();
            $table->timestamps();

            // Definisi foreign key
            $table->foreign('murid_id')->references('id')->on('murid')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};