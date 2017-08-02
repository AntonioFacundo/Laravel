<?php

namespace sisNutrir;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    
    protected $table = 'pacientes';

    protected $primaryKey = 'idpacientes';

    public $timestamps = false;

    protected $fillable = [

    	'nombre',
    	'apellidop',
    	'apellidom',
    	'genero',
    	'edad',
    	'correo',
    	'telefono'

    ];

    protected $guarded = [];

}
