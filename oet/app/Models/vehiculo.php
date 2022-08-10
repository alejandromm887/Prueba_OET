<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'vehiculo';
    protected $primaryKey = 'placa';
    protected $fillable = ['color','marca','tipo_vehiculo','conductor','propietario'];
}
