<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tamus', function (Blueprint $table) {
            $table->id('tamu_id');
            $table->date('tanggal');
            $table->string('nama_siswa', 100);
            $table->string('asal_sekolah', 100)->nullable();
            $table->string('nama_orangtua', 100)->nullable();
            $table->string('phone_orangtua', 20)->nullable();
            $table->text('keterangan')->nullable();
            $table->foreignId('pantita_id')->constrained('users', 'user_id');
            $table->foreignId('status_id')->constrained('status', 'status_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tamus');
    }
};