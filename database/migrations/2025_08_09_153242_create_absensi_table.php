<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('AbsensiID');
            $table->unsignedBigInteger('MuridID')->nullable();
            $table->date('Tanggal');
            $table->time('JamDatang')->nullable();
            $table->enum('Status', ['Hadir', 'Terlambat', 'Tidak Hadir']);
            $table->string('Keterangan')->nullable();
            $table->string('Kode_Absensi')->nullable();
            $table->string('NIP')->nullable();
            $table->string('NIS')->nullable();
            $table->string('StatusAbsensi')->nullable();
            $table->timestamps();

            $table->foreign('MuridID')->references('MuridID')->on('murid')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
