<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'merk_barang',
        'jenis_barang',
        'harga_barang',
        'jumlah_barang',
        'tanggal_beli_barang',
        'masa_garansi_barang',

    ];
}
