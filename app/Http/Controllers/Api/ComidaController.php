<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ComidaResource;
use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ComidaResource::collection(Comida::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $dueno = Comida::create([
        'marca' => $request->marca,
            'descripcion' => $request->descripcion,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comida $comida)
    {
        return new ComidaResource($comida);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comida $comida)
    {
        $comida->update([
            'marca' => $request->marca,
            'descripcion' => $request->descripcion,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comida $comida)
    {
        $comida->delete();
    }
}
