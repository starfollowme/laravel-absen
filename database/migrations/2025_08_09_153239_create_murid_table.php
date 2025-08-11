<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('murid', function (Blueprint $table) {
            // Menyesuaikan nama primary key dan kolom dengan konvensi snake_case
            $table->id(); // Sebelumnya 'MuridID'
            $table->string('nis', 20)->unique(); // Sebelumnya 'NIS'
            $table->string('nama', 100); // Sebelumnya 'Nama'
            $table->date('tanggal_lahir')->nullable(); // Sebelumnya 'TanggalLahir'
            $table->unsignedBigInteger('kelas_id'); // Sebelumnya 'KelasID'
            $table->string('gambar')->nullable(); // Sebelumnya 'Gambar'
            $table->timestamps();

            // Menyesuaikan foreign key ke id di tabel kelas
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('murid');
    }
};