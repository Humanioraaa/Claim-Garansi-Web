<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credetials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        //checking login valid
        if (Auth::attempt($credetials)) {
            //manager
            if (Auth::user()->id_role == 1) {
                return redirect('/1_manager_dashboard');
            }
            //admin garansi
            if (Auth::user()->id_role == 2) {
                return redirect('/2_admingaransi_dashboard');
            }
            //administrator
            if (Auth::user()->id_role == 3) {
                return redirect('/3_administrator_dashboard');
            }
            //user
            if (Auth::user()->id_role == 4) {
                return redirect('/service');
            }
        }
        //error
        return back()->with('error', 'Error Email or Password');



    }


    public function register()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ])->validate();
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return back()->with('success', 'Register successfully');
    }

}
