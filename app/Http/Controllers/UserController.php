<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penugasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {

        return view('4_user_service');
    }

    public function cekstatus()
    {
        $data=Barang::all();


        //Data untuk ditampilkan pada Page

        $user = Auth::user();
        $data = Barang::where('user_id', $user->id)->get();
        $ajuan = $data->whereNotIn('status', ['selesai', 'dikirim']);


        return view('4_user_statuspage', compact( 'user', 'data', 'ajuan'));
    }


    public function notifikasi()
    {
        $user = Auth::user();
        $data = Barang::where('user_id', $user->id)->get();
        $barang = $data->whereIn('status', ['selesai', 'dikirim']);

        return view('4_user_riwayat',  compact( 'user', 'data', 'barang'));
    }
}

