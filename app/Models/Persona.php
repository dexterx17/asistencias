<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    //protected $primaryKey = "id";
    
    protected $table = "personas";

    protected $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'edad',
        'email'
    ];

    /**
     * Una persona tiene o registra varias asistencias
     */
    public function asistencias(){
        return $this->hasMany(AsistenciaPersonal::class);
    }
}
