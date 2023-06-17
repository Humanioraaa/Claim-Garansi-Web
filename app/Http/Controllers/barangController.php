<?php

namespace App\Http\Controllers;


use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class barangController extends Controller
{
    public function add()
    {
        $barang = Barang::all();
        $users = Auth::user();
        return view('/barang', [
            'barang' => $barang,
            'users' => $users,
        ]);
    }


    public function store(Request $request)
    {
        // $barang = new barang;
        // $barang-> merk_barang -> $request merk_barang;
        // $barang-> jenis_barang -> $request jenis_barang;
        // $barang-> harga_barang -> $request harga_barang;
        // $barang-> tanggal_beli_barang -> $request tanggal_beli_barang;
        // $barang-> masa_garansibarang -> $request masa_garansi_barang;
        // $barang->save();
        
        $users = Auth::user();
        $barang = Barang::create($request->all());
        $barang->user_id = $user->id;
        $barang->save();

        return redirect('service');
        
    }

    
}
