<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function create()
    {
        $departamentos = Departamento::all();
        return view('empleados.create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'identificacion' => 'required|unique:empleados|max:255',
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',

        ]);

        Empleado::create([
            'identificacion' => $validated['identificacion'],
            'nombres' => $validated['nombres'],
            'apellidos' => $validated['apellidos'],
            'telefono' => $validated['telefono'],
            'cargo' => 'colaborador',
            'area' => 'General',    
        ]);

        return redirect()->route('employees.index')->with('success', 'Empleado creado exitosamente.');
    }

   
}
