<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mascota;
use Illuminate\Http\Request;
use App\Http\Resources\MascotaResource;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MascotaController::collection(Mascota::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mascota = Mascota::create([
            'nombre' => $request->nombre,
            'raza' => $request->raza,
            'estatura cm' => $request->estaturacm,
            'peso' => $request->peso,
            'edad' => $request->edad,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mascota $mascota)
    {
        return new MascotaResource($mascota);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mascota $mascota)
    {
        $mascota->update([
            'nombre' => $request->nombre,
            'raza' => $request->raza,
            'estatura cm' => $request->raza,
            'peso' => $request->raza,
            'edad' => $request->raza,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
    }
}
