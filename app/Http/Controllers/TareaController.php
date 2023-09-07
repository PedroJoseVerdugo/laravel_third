<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function index()
    {
        // Consultar tareas públicas (por ejemplo, todas las tareas)
        $tareasPublicas = Tarea::all();

        return view('tareas.index', ['tareas' => $tareasPublicas]);
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            // Validar y almacenar la tarea
            $request->validate([
                'nombre' => 'required|string',
                'fecha_inicio' => 'required|date',
                'fecha_fin' => 'required|date',
                'asignado_a' => 'required|string',
            ]);
    }
            Tarea::create($request->all());
    
            Tarea::create($request->all());

            return redirect('/tareas')->with('success', 'Tarea añadida con éxito.');
         }
    }

