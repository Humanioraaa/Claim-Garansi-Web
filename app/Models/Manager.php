<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    protected $table = 'manager';
    protected $primaryKey = 'id_manager';

    protected $fillable = [
        'username_manager',
        'password_manager',
        'tanggal_komplain',
        'nomorhp_manager',
    ];
}
