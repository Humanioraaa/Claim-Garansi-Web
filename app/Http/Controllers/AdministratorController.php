<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Roles;
use App\Models\Barang;

use App\Models\Penugasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdministratorController extends Controller
{
    public function index()
    {

        $users=User::all()->where('id_role', 2);
         return view('3_administrator_penugasan', compact('users'));
    }

    public function test($id)
    {

        $barang=Barang::find($id);
        $administrator = Auth::user();
        $users=User::where('id_role', 2)->get();


         return view('test', compact('users', 'barang', 'administrator'));
    }

    public function tunjuk($id, Request $request){
        $barang=Barang::find($id);
        $barang->status = 'waiting shipment';
        $barang->save();

        // $penugasan = Penugasan::create([
        //     'id_barang' => $barang->id_barang,
        //     'id_user'=> $request->id_user,
        // ]);
        $penugasan = Penugasan::create($request->all());
        $penugasan->id_barang = $request->input('id_barang');
        $penugasan-> id_user = $request->input('id_user');
        // $penugasan->save();

        return redirect('3_administrator_approving');
    }


    public function assign(Barang $barang, $admin_garansi)
    {
        $administrator = auth()->id;

        $barang->status = 'waiting shipment';
        $barang->save();

        $penugasan=Penugasan::all();

        $assignment = Penugasan::create([
            'id_barang' => $barang->id,
            'id_administrator' => $administrator,
            'id_admin_garansi' => $penugasan->user_id,
        ]);

        return redirect('/3_administrator_approving');
    }

}
