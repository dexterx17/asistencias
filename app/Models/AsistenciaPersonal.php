<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenciaPersonal extends Model
{
    use HasFactory;

    protected $table = "asistencias_personas";

    protected $fillable = [
        'persona_id',
        'fecha_ingreso',
        'fecha_salida'
    ];

    /**
     * Persona a la que le pertenece esta asistencia
     */
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
