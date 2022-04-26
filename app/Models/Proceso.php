<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;

    protected $fillable = [
        'alumno_id',
        'materia_id',
        'estado'
    ];

    public function materia(){
        return $this->belongsTo('App\Models\Materia','materia_id');
    }
    public function alumno(){
        return $this->belongsTo('App\Models\Alumno','alumno_id');
    }
    public function asistencia($id)
    {
        $asistencia = Asistencia::where('proceso_id',$id)->first();

        return $asistencia;
    }
}
