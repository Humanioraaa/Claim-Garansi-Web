<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penugasan extends Model
{
    use HasFactory;

    protected $table = 'penugasan';
    protected $primaryKey = 'id';

    public function setTanggalSelesaiAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['tanggal_selesai'] = \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('Y-m-d');
        } else {
            $this->attributes['tanggal_selesai'] = null;
        }
    }

    protected $fillable = [
        'tanggal_awal',
        'tanggal_selesai',
        'id_user',
        'id_barang'
    ];

    public function Barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }



    public function Admin_Garansi()
    {
        return $this->belongsTo(User::class, 'id_admin_garansi');
    }

}
