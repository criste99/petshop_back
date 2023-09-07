<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MascotaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nombre' => $request->nombre,
            'raza' => $request->raza,
            'estatura cm' => $request->raza,
            'peso' => $request->raza,
            'edad' => $request->raza,
        ];
    }
}
