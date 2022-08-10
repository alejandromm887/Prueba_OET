<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'vehiculo';
    // protected $primaryKey = 'placa';
    protected $fillable = ['placa','color','marca','tipo_vehiculo'];
}
