<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminGaransi_Controller extends Controller
{
    public function index(Request $request)
    {

        return view('2_admingaransi_dashboard');
    }
}