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
            'nombre' => $this->nombre,
            'raza' => $this->raza,
            'estatura cm' => $this->estaturacm,
            'peso' => $this->peso,
            'edad' => $this->edad,
        ];
    }
}
