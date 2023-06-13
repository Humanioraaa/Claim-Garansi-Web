<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\Request;

class RoleManager extends Controller
{
    public function index(){
       $users=User::with('role')->where('id_role', '!=', 1)->get();
       $role = Roles::all();
        return view('1_manager_atur_role', compact('users', 'role'));
    }

    public function changerole($id, Request $request){
        $users = User::find($id);
        $users->id_role=$request->input('id_role');
        $users->update();
    
        return redirect('/1_manager_atur_role');
    }
}
