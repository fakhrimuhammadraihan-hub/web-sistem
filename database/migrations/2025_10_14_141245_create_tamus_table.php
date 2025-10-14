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
    Schema::create('tamus', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('email')->nullable();
        $table->string('no_telp')->nullable();
        $table->text('alamat')->nullable();
        $table->enum('status', ['Pending', 'Dihubungi', 'Selesai'])->default('Pending');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamus');
    }
};
