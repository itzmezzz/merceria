<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Caja extends Model
{
     use HasFactory;

    protected $table = 'cajas';

    protected $fillable = [
        'fecha_apertura',
        'fecha_cierre',
        'monto_inicial',
        'monto_final',
        'monto_sistema',
        'diferencia',
        'estatus',
        'user_id'
    ];
}
