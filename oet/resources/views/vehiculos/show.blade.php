@extends('vehiculos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Datos personales</div>
    <div class="card-body mr-3 ml-3">
          <div class="card-body">
          <p class="card-title"><STRONG>Placa :</STRONG> {{ $vehiculos->placa }}</p>
          <p class="card-text"><STRONG>Color :</STRONG> {{ $vehiculos->color }}</p>
          <p class="card-text"><STRONG>Marca :</STRONG> {{ $vehiculos->marca }}</p>
          <p class="card-text"><STRONG>Tipo de vehiculo :</STRONG> {{ $vehiculos->tipo_vehiculo}}</p>
    </div>
  </div>
  <a href="{{ url('/vehiculos/') }}" class="btn btn-success " title="Añadir vehiculos">
            Atrás
          </a>
</div>