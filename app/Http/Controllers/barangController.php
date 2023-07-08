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
        $newName = '';
        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->jenis_barang.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('struk', $newName);
        }
        $request['struk'] = $newName;

        $request['status']='pending';
        $barang = Barang::create($request->all());
        $barang->user_id = $request->user_id;

        return redirect('/4_user_service')->with('success', 'Success');
    }



}
