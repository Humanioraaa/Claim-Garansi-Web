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
        Schema::create('penugasan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_awal');
            $table->date('tanggal_selesai');
            $table->unsignedBigInteger('id_komplain');
            $table->unsignedBigInteger('id_admin_garansi');
            $table->unsignedBigInteger('id_administrator');

            $table->foreign('id_komplain')->references('id')->on('komplain')->onDelete('cascade');
            $table->foreign('id_admin_garansi')->references('id')->on('admin_garansi')->onDelete('cascade');
            $table->foreign('id_administrator')->references('id')->on('administrator')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penugasan');
    }
};
