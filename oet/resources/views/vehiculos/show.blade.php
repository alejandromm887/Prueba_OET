@extends('vehiculos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Datos personales</div>
    <div class="card-body mr-3 ml-3">
          <div class="card-body">
          <p class="card-title"><STRONG>Nombre :</STRONG> {{ $vehiculos->nombre }}</p>
          <p class="card-text"><STRONG>Email :</STRONG> {{ $vehiculos->email }}</p>
          <p class="card-text"><STRONG>Sexo :</STRONG> {{ $vehiculos->sexo }}</p>
          <p class="card-text"><STRONG>Area :</STRONG> {{ $vehiculos->area_id }}</p>
          <p class="card-text"><STRONG>Boletín :</STRONG> {{ $vehiculos->boletin }}</p>
          <p class="card-text"><STRONG>Descripcion :</STRONG> {{ $vehiculos->descripcion }}</p>
    </div>
  </div>
  <a href="{{ url('/vehiculos/') }}" class="btn btn-success " title="Añadir vehiculos">
            Atrás
          </a>
</div>