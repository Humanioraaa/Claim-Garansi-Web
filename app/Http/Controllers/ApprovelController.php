<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class ApprovelController extends Controller
{
    public function ngeapprove(Barang $barang) {
        $barang->status = 'approved';
        $barang->save();

        return redirect()->route('barangindex');
    }

    public function ngereject(Barang $barang) {
        $barang->status = 'rejected';
        $barang->save();

        return redirect()->route('barangindex');
    }

}
