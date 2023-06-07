<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komplain extends Model
{
    use HasFactory;

    protected $table = 'komplain';
    protected $primaryKey = 'id_komplain';

    protected $fillable = [
        'komplain',
        'jenis_komplain',
        'tanggal_komplain',
        'nama_petugas',
        'status_komplain',
        'id_pembeli',
        'id_admin_garansi',
        'id_manager',
    ];
}
