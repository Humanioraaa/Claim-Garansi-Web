<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    public function setTanggalBeliBarangAttribute($value)
    {
        $this->attributes['tanggal_beli_barang'] = \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('Y-m-d');
    }
    



    protected $primaryKey = 'id_barang';

    protected $fillable = ['merk_barang', 
    'jenis_barang', 'harga_barang', 'jumlah_barang', 
    'tanggal_beli_barang', 'masa_garansi_barang', 'user_id'];


    public function User()
{
    return $this->belongsTo(User::class, 'user_id');
}

    
}


