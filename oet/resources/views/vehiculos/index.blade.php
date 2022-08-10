@extends('vehiculos.layout')

@section('content')
    <div class="container">
        <div class="row " style="margin:20px;">
            <div class="flex justify-center col-md-3 max-w-6xl mx-auto">
                <img src="https://lirp.cdn-website.com/0192771f/dms3rep/multi/opt/OET-sin-cuadro_sin-fondo-195w.png" class="flex justify-center col-md-12">
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Inicio
                    </div>
                    <div class="card-body">

                        <div class="row justify-content-center">
                            <div class="col-md-6  col-md-offset-5">
                                <a href="{{ url('/vehiculos/create') }}" class="btn btn-success btn-sm" title="Registros">
                                <span class="glyphicon glyphicon-align-left">Realizar registros</span>    
                                
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ url('/vehiculos/show') }}" class="btn btn-success btn-sm" title="Registrar Vehículos">
                                    Hacer consultar
                                </a>
                            </div> 
                            
                        </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Placa</th>
                                        <th>Marca</th>
                                        <th>Conductor</th>
                                        <th>Propietario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($consultas as $c)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $c->placa }}</td>
                                        <td>{{ $c->marca }}</td>
                                        <td>{{ $c->conductor }}</td>
                                        <td>{{ $c->propietario }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table> 
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection