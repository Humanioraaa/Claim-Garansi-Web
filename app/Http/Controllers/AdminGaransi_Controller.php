<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penugasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminGaransi_Controller extends Controller
{
    public function index(Request $request)
    {

        return view('2_admingaransi_dashboard');
    }

    public function tampil(){
        $id_admin = Auth::user()->id;
        $komplain=Penugasan::all()->where('id_user', $id_admin);

        return view('2_admingaransi_status', compact('komplain'));
    }


    public function edit($id){
        $komplain = Penugasan::find($id);
        return view('2_admin_garansi_edit', compact('komplain'));


    }

    public function store($id, Request $request) {

        $komplain = Penugasan::find($id);

        $komplain-> tanggal_selesai = $request->input('tanggal_selesai');
        $barang = $komplain->Barang;

        $barang->status = $request->input('status');
        $barang->save();
        $komplain->save();

        return redirect()->route('viewkomplain');

    }

}
