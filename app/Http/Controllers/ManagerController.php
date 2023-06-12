<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function store(Request $request)
    {

        return view('service');
    }
}