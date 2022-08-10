<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'conductor';
    // protected $primaryKey = 'numero_cedula';
    protected $fillable = ['numero_cedula','primer_nombre','segundo_nombre','apellidos','direccion','telefono','ciudad','vehiculo'];
}
