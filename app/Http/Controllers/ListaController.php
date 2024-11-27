<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function empleados()
    {
        return view('lista.index');
    }

    public function cargos()
    {
        return view('cargos.index'); // Asegúrate de que esta vista exista
    }
}
