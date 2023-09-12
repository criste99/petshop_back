<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dueño extends Model
{
    use HasFactory;
    protected $table = 'dueño';

    protected $fillable = [
        'nombre',
        'tipo_id',
        'identificacion',
        'edad',
        'correo',
        'telefono',
    ];
}
