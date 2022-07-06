<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //

    public function index()
    {
        return view('dashboard');
    }
}
