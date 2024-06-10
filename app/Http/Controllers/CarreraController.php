<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $carreras = Carrera::all();
        return view('carreras.index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $carrera = new Carrera();
        $carrera->codigo = $request->codigo;
        $carrera->nombre = $request->nombre;
        $carrera->descripcion = $request->descripcion;
        $carrera->facultad = $request->facultad;
        $carrera->save();
        return redirect()->route('carreras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $carrera = Carrera::find($id);
        return view('carreras.show', compact('carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $carrera = Carrera::find($id);
        return view('carreras.edit', compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $carrera = Carrera::find($id);
        $carrera->codigo = $request->codigo;
        $carrera->nombre = $request->nombre;
        $carrera->descripcion = $request->descripcion;
        $carrera->facultad = $request->facultad;
        $carrera->save();
        return redirect()->route('carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $carrera = Carrera::find($id);
        $carrera->delete();
        return redirect()->route('carreras.index');
    }
}
