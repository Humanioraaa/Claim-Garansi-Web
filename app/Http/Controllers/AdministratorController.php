<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index(Request $request)
    {

        return view('3_administrator_dashboard');
    }
}