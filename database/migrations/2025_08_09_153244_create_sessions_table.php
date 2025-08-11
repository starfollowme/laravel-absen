<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            // Kolom primary key default Laravel
            $table->string('id')->primary();

            // Kolom default Laravel untuk simpan user login
            $table->foreignId('user_id')->nullable()->index()->constrained('users')->onDelete('cascade');

            // Kolom tambahan untuk NIP (opsional)
            $table->string('user_nip', 20)->nullable()->index();

            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
