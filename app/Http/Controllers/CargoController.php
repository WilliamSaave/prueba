<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        return view('cargos.index'); // Asegúrate de crear esta vista
    }
}
