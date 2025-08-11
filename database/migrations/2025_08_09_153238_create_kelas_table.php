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
        Schema::create('kelas', function (Blueprint $table) {
            // Menyesuaikan nama primary key dan kolom dengan konvensi snake_case
            $table->id(); // Sebelumnya 'KelasID'
            $table->string('nama_kelas', 50); // Sebelumnya 'NamaKelas'
            $table->string('jurusan', 50); // Sebelumnya 'Jurusan'
            $table->string('tingkat', 10); // Sebelumnya 'Tingkat'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};