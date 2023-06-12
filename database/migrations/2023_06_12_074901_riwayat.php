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
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('merk_barang');
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_komplain');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_komplain')->references('id')->on('komplain')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('riwayat');
    }
};
