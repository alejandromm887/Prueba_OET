@extends('vehiculos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Crear nuevo registro</div>
  <div class="card-body mr-3 ml-3">

    <div class="btn-group justify-content-center mb-5" role="group" aria-label="Basic outlined example">
      <button type="button" id="btn1" class="btn btn-outline-primary" onclick="b1()">Conductor</button>
      <button type="button" id="btn2" class="btn btn-outline-primary"onclick="b2()">Propietario</button>
      <button type="button" id="btn3" class="btn btn-outline-primary"onclick="b3()">Vehiculo</button>
    </div>
    <div id="id1" style="display:block">
      <form action="{{ url('vehiculos') }}" name="form" method="post">
        {!! csrf_field() !!}
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Numero de cédula *</label>
          </div>
          <div class="col-md mb-2">
            <input type="number" name="numero_cedula" id="numero_cedula" placeholder="Numero de cedula" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Primer nombre *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="primer_nombre" id="primer_nombre" placeholder="Primer nombre del conductor" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Segundo nombre</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="segundo_nombre" id="segundo_nombre" placeholder="Segundo nombre del conductor" class="form-control">
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Apellidos *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del conductor" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Direccion *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="direccion" id="direccion" placeholder="Direccion del conductor" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Telefono *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="telefono" id="telefono" placeholder="Telefono del conductor" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Ciudad *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad del conductor" class="form-control" required>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Vehiculo *</label>
          </div>
          <div class="col-md mb-2">
            <select name="vehiculo" id="vehiculo" class="form-control"  required>
              <option value="" >Seleccionar</option>
              @foreach ($placas as $placa)
                <option value="{{ $placa['placa'] }}" placeholder="Seleccionar placa del vehículo">{{$placa['placa']}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <a href="{{ url('/vehiculos/') }}" class="btn btn-success " title="Añadir empleados">
              Atrás
            </a>
          </div>
          <div class="col-md">
            <input type="submit" value="Guardar" class="btn btn-primary" onclick="valida_envia()">
          </div>
        </div>      
      </form>
    </div>

    <div id="id2" style="display:none">
      <form action="{{ url('vehiculos') }}" name="form" method="post">
        {!! csrf_field() !!}
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Numero de cédula *</label>
          </div>
          <div class="col-md mb-2">
            <input type="number" name="numerocedula" id="numerocedula" placeholder="Numero de cedula" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Primer nombre *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="primer_nombre" id="primer_nombre" placeholder="Primer nombre del propietario" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Segundo nombre</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="segundo_nombre" id="segundo_nombre" placeholder="Segundo nombre del propietario" class="form-control">
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Apellidos *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del propietario" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Direccion *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="direccion" id="direccion" placeholder="Direccion del propietario" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Telefono *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="telefono" id="telefono" placeholder="Telefono del propietario" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Ciudad *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad del propietario" class="form-control" required>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Vehiculo *</label>
          </div>
          <div class="col-md mb-2">
            <select name="vehiculo" id="vehiculo" class="form-control" placeholder="Seleccionar placa del vehículo" required>
              <option value="" >Seleccionar</option>
              @foreach ($placas as $placa)
                <option value="{{ $placa['placa'] }}" >{{$placa['placa']}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <a href="{{ url('/vehiculos/') }}" class="btn btn-success " title="Añadir empleados">
              Atrás
            </a>
          </div>
          <div class="col-md">
            <input type="submit" value="Guardar" class="btn btn-primary" onclick="valida_envia2()">
          </div>
        </div>      
      </form>
    </div>
    <div id="id3" style="display:none">
      <form action="{{ url('vehiculos') }}" name="form" method="post">
        {!! csrf_field() !!}
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Placa *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="placa" id="placa" placeholder="Placa del vehículo " class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Color</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="color" id=" color" placeholder="Color" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Marca *</label>
          </div>
          <div class="col-md mb-2">
            <input type="text" name="marca" id="marca" placeholder="Marca" class="form-control" required>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <label>Tipo de vehiculo *</label>
          </div>
          <div class="col-md">
            <div class="form-check">
                <label for="tipo_vehiculo" class="form-check-label">
                <input type="radio" name="tipo_vehiculo" id="tipo_vehiculo" value="Particular" class="form-check-input" required>
                  Particular
                </label>
            </div>
            <div class="form-check">
                <label for="tipo_vehiculo" class="form-check-label">
                <input type="radio" name="tipo_vehiculo" id="tipo_vehiculo" value="Publico" class="form-check-input" required>
                  Público
                </label>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <a href="{{ url('/vehiculos/') }}" class="btn btn-success " title="Registrar vehículos">
              Atrás
            </a>
          </div>
          <div class="col-md">
            <input type="submit" value="Guardar" class="btn btn-primary" onclick="valida_envia3()">
          </div>
          
        </div>      
      </form>
    </div>
    
  </div>
</div>
  
@stop