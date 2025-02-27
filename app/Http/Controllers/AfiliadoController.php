<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\Afiliado;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $afiliados=Afiliado::All();
        return view('afiliado.index')->with('afiliados',$afiliados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('afiliado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $afiliado = new Afiliado();
        $afiliado->codafiliado=$request->get('codigoAfiliado');
        $afiliado->nombre=$request->get('nombre');
        $afiliado->apellido=$request->get('apellido');
        $afiliado->ciudad=$request->get('ciudad');
        $afiliado->telefono=$request->get('telefono');
        $afiliado->edad=$request->get('edad');
        $afiliado->save();
        return redirect('/afiliado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $afiliados=Afiliado::All();
        $empleado=Empleado::find($id);/*Es para buscar por id*/
        $eliminarRegistro=Afiliado::find($id);
        return view('afiliado.index2')->with('empleado',$empleado)->with('afiliados',$afiliados);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar=Afiliado::find($id);
        return view('afiliado.edit')->with('editar', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editar=Afiliado::find($id);
        $editar->codafiliado=$request->get('codigoAfiliado');
        $editar->nombre=$request->get('nombre');
        $editar->apellido=$request->get('apellido');
        $editar->ciudad=$request->get('ciudad');
        $editar->telefono=$request->get('telefono');
        $editar->edad=$request->get('edad');
        $editar->save();
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminarRegistro=Afiliado::find($id);
        $eliminarRegistro->delete();
        return redirect('/afiliado');
    }
}
