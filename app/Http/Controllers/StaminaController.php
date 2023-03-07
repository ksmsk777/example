<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaminaController extends Controller
{
    public function index()
    {
        return view('stamina.index');

    }
}
