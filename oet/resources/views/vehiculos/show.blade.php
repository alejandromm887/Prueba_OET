@extends('vehiculos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Consultar registros</div>
  <div class="card-body mr-3 ml-3">

    <div class="btn-group justify-content-center mb-5" role="group" aria-label="Basic outlined example">
      <button type="button" id="btn1" class="btn btn-outline-primary" onclick="b1()">Conductor</button>
      <button type="button" id="btn2" class="btn btn-outline-primary"onclick="b2()">Propietario</button>
      <button type="button" id="btn3" class="btn btn-outline-primary"onclick="b3()">Vehiculo</button>
    </div>
    <div id="id1" style="display:block">
    <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Numero de cédula</th>
                          <th>Primer nombre</th>
                          <th>Segundo nombre</th>
                          <th>Apellios</th>
                          <th>Direccion</th>
                          <th>Telefono</th>
                          <th>Ciudad</th>
                          <th>Vehículo</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($conductores as $c)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $c->numero_cedula }}</td>
                          <td>{{ $c->primer_nombre }}</td>
                          <td>{{ $c->segundo_nombre }}</td>
                          <td>{{ $c->apellidos }}</td>
                          <td>{{ $c->direccion }}</td>
                          <td>{{ $c->telefono }}</td>
                          <td>{{ $c->ciudad }}</td>
                          <td>{{ $c->vehiculo }}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table> 
          </div>
    </div>

    <div id="id2" style="display:none">
    <div class="table-responsive">
              <table class="table">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Numero de cédula</th>
                      <th>Primer nombre</th>
                      <th>Segundo nombre</th>
                      <th>Apellios</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Ciudad</th>
                      <th>Vehículo</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($propietarios as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->numerocedula }}</td>
                        <td>{{ $p->primer_nombre }}</td>
                        <td>{{ $p->segundo_nombre }}</td>
                        <td>{{ $p->apellidos }}</td>
                        <td>{{ $p->direccion }}</td>
                        <td>{{ $p->telefono }}</td>
                        <td>{{ $p->ciudad }}</td>
                        <td>{{ $p->vehiculo }}</td>
                    </tr>
                @endforeach
                </tbody>
              </table> 
          </div>
    </div>
    <div id="id3" style="display:none">
            <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Placa</th>
                          <th>Color</th>
                          <th>Marca</th>
                          <th>Tipo de vehículo</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($vehiculos as $v)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $v->placa }}</td>
                          <td>{{ $v->color }}</td>
                          <td>{{ $v->marca }}</td>
                          <td>{{ $v->tipo_vehiculo }}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table> 
            </div>
    </div>
    <div class="col-md-2">
      <a href="{{ url('/vehiculos/') }}" class="btn btn-success " title="Regresar">
        Atrás
      </a>
    </div>
  </div>
</div>
  
@stop