<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'idcliente';
    public $timestamps = false;

    protected $fillable = [
            'nombres', 
            'apellidos', 
            'email', 
            'telefono', 
            'dni', 
            'idcampania', 
            'fecharegistro', 
            'coddistrito', 
            'utm', 
            'grado',
            'edad',
            'carrera',
            'evento',
            'ocupacion',
            'tipoparticipante',
            'colegio', 
            'anioegreso', 
            'estado', 
    ];

    protected $hidden = [
        'userinsert', 
        'dateinsert', 
        'userupdate', 
        'dateupdate',
    ];
}
