<?php

namespace App\Http\Controllers;


use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class barangController extends Controller
{
    public function tampil(){
        $barang=Barang::all();

        return view('3_administrator_approving', compact('barang'));
    }
    public function tugas(){
        $barang=Barang::all()->where('status', 'approved');

        return view('3_administrator_form_menugaskan', compact('barang'));
    }
    public function add()
    {
        $barang = Barang::all();
        $users = Auth::user();
        return view('/4_user_upload', [
            'barang' => $barang,
            'users' => $users,
        ]);
    }


    public function store(Request $request)
    {
        // Validator::make($request->all(), [
        //     'merk_barang' => 'required',
        //     'jenis_barang' => 'required',
        //     'harga_barang' => 'required',
        //     'tanggal_beli_barang' => 'required|date',
        //     'masa_garansibarang' => 'required',
        //     'user_id' => 'required',
        // ])->validate();

        $newName = '';
        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->jenis_barang.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('struk', $newName);
        }
        $request['struk'] = $newName;

        $request['status']='pending';
        $barang = Barang::create($request->all());
        // $barang = new Barang;

        // $barang->merk_barang = $request->merk_barang;
        // $barang->jenis_barang = $request->jenis_barang;
        // $barang->harga_barang = $request->harga_barang;
        // $barang->jumlah_barang = $request->jumlah_barang;
        // $barang->masa_garansi_barang = $request->masa_garansi_barang;
        // $barang->tanggal_beli_barang = $request->tanggal_beli_barang;
        $barang->user_id = $request->user_id;
        // $barang->save();

        return redirect('/4_user_service')->with('success', 'Success');
    }



}
