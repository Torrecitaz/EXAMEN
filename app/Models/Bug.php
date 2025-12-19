<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    // Definimos la tabla manualmente
    protected $table = 'bugs';

    // $fillable completo para permitir la carga masiva de datos
    protected $fillable = [
        'titulo',
        'area',
        'gravedad',
        'pasos',
        'estado'
    ];
}