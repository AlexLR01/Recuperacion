<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Contacto $contacto)
    {
        return view('conocidos.contacto.index',compact('conocido'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactoRequest $request, Contacto $contacto)
    {
        $contacto = new Contacto();
        $contacto->nombre = $request->input('nombre');
        $contacto->telefono = $request->input('descripcion');
        $contacto->correo = $request->input('precio');
        $contacto->contacto_id = $contacto->id;
        $contacto->save();
        return redirect()->route('conocidos.contactos.index',compact('conocido'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
