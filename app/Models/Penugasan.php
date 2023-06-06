<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    use HasFactory;

    protected $table = 'penugasan';

    protected $fillable = [
        'tanggal_awal',
        'tanggal_selesai',
        'id_komplain',
        'id_admin_garansi',
        'id_administrator',
        
    ];
}
