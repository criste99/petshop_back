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
        return MascotaResource::collection(Mascota::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mascota = Mascota::create([
            'nombre' => $request->nombre,
            'raza' => $request->raza,
            'estaturacm' => $request->estaturacm,
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
            'estaturacm' => $request->estaturacm,
            'peso' => $request->peso,
            'edad' => $request->edad,
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
