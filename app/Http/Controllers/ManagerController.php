<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(Request $request)
    {

        return view('1_manager_dashboard');
    }
}