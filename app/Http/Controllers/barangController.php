<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class barangController extends Controller
{
    public function store(Request $request)
    {

        return view('input');
    }
}
