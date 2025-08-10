<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->string('nip'); // FK ke users.nip
            $table->unsignedBigInteger('role_id'); // FK ke roles.id
            $table->timestamps();

            // Foreign key ke tabel users.nip
            $table->foreign('nip')
                  ->references('nip')
                  ->on('users')
                  ->onDelete('cascade');

            // Foreign key ke tabel roles
            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
                  ->onDelete('cascade');

            // Kombinasi nip & role_id unik
            $table->unique(['nip', 'role_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
