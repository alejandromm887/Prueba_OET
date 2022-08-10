<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'propietario';
    //protected $primaryKey = 'numero_cedula';
    protected $fillable = ['numerocedula','primer_nombre','segundo_nombre','apellidos','direccion','telefono','ciudad','vehiculo'];
}
