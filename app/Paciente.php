<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nombre',
        'edad',
        'telefono',
        'razon',
        'email',
        'departamento',
        'fecha',
        'doctor'
    ];
}
