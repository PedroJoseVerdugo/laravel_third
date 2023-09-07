<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tarea;

class ConsultaTareaController extends Controller
{
    public function create(Request $request)
    {
    if (Auth::check()) {
    $this->validate($request, [
    'nombre' => 'required',
    ]);
    Tarea::create($request->all());
    }
    return to_route('---');
    }
    public function delete($id)
    {
    if (Auth::check()) {
    $consultartareas = Tarea::find($id);
    $consultartareas->delete();
    }
    return to_route('-----');
    }
   
}
