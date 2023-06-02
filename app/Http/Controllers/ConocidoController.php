<?php

namespace App\Http\Controllers;

use App\Models\Conocido;
use App\Http\Requests\StoreConocidoRequest;
use App\Http\Requests\UpdateConocidoRequest;

class ConocidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conocidos = Conocido::all();

        return view('conocidos.index',compact('conocidos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conocidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConocidoRequest $request)
    {
        $conocido = new Conocido();
        $conocido->nombre = $request->input('nombre');
        $conocido->usuario = $request->input('usuario');
        $conocido->clave = $request->input('clave');
        $conocido->save();
        return redirect(route('conocidos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Conocido $conocido)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conocido $conocido)
    {
        return view('conocidos.edit',compact('conocido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConocidoRequest $request, Conocido $conocido)
    {
        $conocido->nombre = $request->input('nombre');
        $conocido->usuario = $request->input('usuario');
        $conocido->clave = $request->input('clave');
        $conocido->save();
        return redirect(route('conocidos.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conocido $conocido)
    {
        $conocido->delete();
        return redirect(route('conocidos.index'));
    }
}
