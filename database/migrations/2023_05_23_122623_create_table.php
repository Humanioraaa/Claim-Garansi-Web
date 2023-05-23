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
        Schema::create('admin_garansi', function (Blueprint $table) {
            $table->increments('id_admin_garansi');
            $table->string('username_admin_garansi');
            $table->string('password_admin_garansi');
            $table->string('nomorhp_admin_garansi');
            $table->timestamps();
        });

        Schema::create('manager', function (Blueprint $table) {
            $table->increments('id_manager');
            $table->string('username_manager');
            $table->string('password_manager');
            $table->string('nomorhp_manager');
            $table->timestamps();
        });

        Schema::create('administrator', function (Blueprint $table) {
            $table->increments('id_administrator');
            $table->string('password_administrator');
            $table->string('nomorhp_administrator');
            $table->timestamps();
        });

        Schema::create('pembeli', function (Blueprint $table) {
            $table->increments('id_pembeli');
            $table->string('nama_pembeli');
            $table->string('username_pembeli');
            $table->string('password_pembeli');
            $table->string('nomorhp_pembeli');
            $table->timestamps();
        });

        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('merk_barang');
            $table->string('jenis_barang');
            $table->string('harga_barang');
            $table->integer('jumlah_barang');
            $table->date('tanggal_beli_barang');
            $table->string('masa_garansi_barang');
            $table->unsignedinteger('id_pembeli');

            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembeli')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('komplain', function (Blueprint $table) {
            $table->increments('id_komplain');
            $table->string('komplain');
            $table->date('tanggal_komplain');
            $table->date('tanggal_selesai');
            $table->string('nama_petugas');
            $table->string('status_komplain');

            $table->unsignedinteger('id_pembeli');
            $table->unsignedinteger('id_admin_garansi');
            $table->unsignedinteger('id_manager');

            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembeli')->onDelete('cascade');
            $table->foreign('id_admin_garansi')->references('id_admin_garansi')->on('admin_garansi')->onDelete('cascade');
            $table->foreign('id_manager')->references('id_manager')->on('manager')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('penugasan', function (Blueprint $table) {
            $table->increments('id_penugasan');
            $table->date('tanggal_awal');
            $table->date('tanggal_selesai');
            $table->unsignedinteger('id_komplain');
            $table->unsignedinteger('id_admin_garansi');
            $table->unsignedinteger('id_administrator');

            $table->foreign('id_komplain')->references('id_komplain')->on('komplain')->onDelete('cascade');
            $table->foreign('id_admin_garansi')->references('id_admin_garansi')->on('admin_garansi')->onDelete('cascade');
            $table->foreign('id_administrator')->references('id_administrator')->on('administrator')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};
