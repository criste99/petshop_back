<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DueñoResource extends JsonResource
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
            'tipo_id' => $this->tipo_id,
            'identificacion' => $this->identificacion,
            'correo' => $this->correo,
            'telefono' => $this->telefono,
        ];
        
    }
}
