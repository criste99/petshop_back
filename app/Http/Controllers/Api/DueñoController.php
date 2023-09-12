<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DueñoResource;
use App\Models\Dueño;
use Illuminate\Http\Request;

class DueñoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DueñoResource::collection(Dueño::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dueno = Dueño::create([
            'nombre' => $request->nombre,
            'tipo_id' => $request->tipo_id,
            'identificacion' => $request->identificacion,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dueño $dueno)
    {
        return new DueñoResource($dueno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dueño $dueno)
    {
        $dueno->update([
            'nombre' => $request->nombre,
            'tipo_id' => $request->tipo_id,
            'identificacion' => $request->identificacion,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dueño $dueno)
    {
        $dueno->delete();
    }
}
