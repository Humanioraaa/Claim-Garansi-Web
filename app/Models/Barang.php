<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public function setTanggalBeliBarangAttribute($value)
        {
            $this->attributes['tanggal_beli_barang'] = \Carbon\Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
        }


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
