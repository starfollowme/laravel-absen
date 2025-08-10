<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
    Schema::create('murid', function (Blueprint $table) {
        $table->id('MuridID');
        $table->string('NIS', 20)->unique();
        $table->string('Nama', 100);
        $table->date('TanggalLahir')->nullable();
        $table->unsignedBigInteger('KelasID');
        $table->string('Gambar')->nullable();  
        $table->timestamps();

        $table->foreign('KelasID')->references('KelasID')->on('kelas')->onDelete('cascade');
    });
}


    public function down(): void {
        Schema::dropIfExists('murid');
    }
};
