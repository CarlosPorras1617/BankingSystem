<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public $nombre;

    public function sendName()
    {
        $nombre = "Juan Perez";
        return view('login', compact('nombre'));
    }
}

