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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('paket_id')->constrained('paket')->onDelete('cascade');
            $table->string('kode_reservasi');
            $table->date('tanggal_reservasi');
            $table->string('alamat');
            $table->string('no_hp');
            $table->decimal('total_harga', 15, 2);
            $table->enum('status', ['menunggu', 'diterima', 'ditolak','selesai'])->default('menunggu');
            $table->enum('status_pembayaran', ['belum', 'dibayar','diterima'])->default('belum');
            $table->enum('metode_pembayaran', ['transfer', 'cash'])->nullable();
            $table->string('bukti_transfer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};