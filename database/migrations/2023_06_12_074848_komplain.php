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
        Schema::create('komplain', function (Blueprint $table) {
            $table->id();
            $table->string('komplain');
            $table->date('tanggal_komplain');
            $table->date('tanggal_selesai');
            $table->string('nama_petugas');
            $table->string('status_komplain');

            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_admin_garansi');
            $table->unsignedBigInteger('id_manager');

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_admin_garansi')->references('id')->on('admin_garansi')->onDelete('cascade');
            $table->foreign('id_manager')->references('id')->on('manager')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komplain');
    }
};
