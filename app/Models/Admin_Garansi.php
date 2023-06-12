<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Garansi extends Model
{
    use HasFactory;

    protected $table = 'admin_garansi';
    protected $primaryKey = 'id_admin_garansi';

    protected $fillable = [
        'username_admin_garansi',
        'password_admin_garansi',
        'nomorhp_admin_garansi',
    ];
}
