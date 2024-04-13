<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados=Empleado::All();
        return view('empleado.index')->with('empleados',$empleados); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->codempleado=$request->get('codigoEmpleado');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->nivel=$request->get('nivel');
        $empleado->telefono=$request->get('telefono');
        $empleado->save();
        return redirect('/empleado');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eliminarRegistro=Empleado::find($id);
        return view('empleado.delete')->with('eliminar',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar=Empleado::find($id);
        return view('empleado.edit')->with('editar', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editar=Empleado::find($id);
        $editar->codempleado=$request->get('codigoEmpleado');
        $editar->nombre=$request->get('nombre');
        $editar->apellido=$request->get('apellido');
        $editar->nivel=$request->get('nivel');
        $editar->telefono=$request->get('telefono');
        $editar->save();
        return redirect('/empleado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminarRegistro=Empleado::find($id);
        $eliminarRegistro->delete();
        return redirect('/empleado');
    }
}
