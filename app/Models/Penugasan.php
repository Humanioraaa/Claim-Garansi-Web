<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penugasan extends Model
{
    use HasFactory;

    protected $table = 'penugasan';
    protected $primaryKey = 'id_penugasan';

    protected $fillable = [
        'tanggal_awal',
        'tanggal_selesai',
        'id_user',
        'id_barang'
    ];

    public function Administrator()
    {
        return $this->belongsTo(User::class, 'id_administrator');
    }

    public function Admin_Garansi()
    {
        return $this->belongsTo(User::class, 'id_admin_garansi');
    }

}
