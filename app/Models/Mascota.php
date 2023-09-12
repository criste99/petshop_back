<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascota';
    protected $fillable = [
        'nombre',
        'raza',
        'estatura cm',
        'peso',
        'edad',
    ];
}
