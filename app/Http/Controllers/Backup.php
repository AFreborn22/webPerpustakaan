<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Backup extends Controller
{
    public function index()
    {
        return view('Backup');
    }
}
