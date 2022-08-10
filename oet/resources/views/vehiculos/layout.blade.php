<!DOCTYPE html>
<html>
<head>
    <title>Vehiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('js/vehiculos.js') }}"></script>
</head>
<body>
   @if(Session::get('Vehiculo_eliminado'))
        <div class="alert alert-danger">
            <label>Empleado Eliminado!</label>
        </div>
    <!-- {{session('Vehiculo_eliminado')}}</div> -->
   @endif

   <!-- REGISTRO EXITOSO -->
   @if(Session::get('Vehiculo_Registrado'))
        <div class="alert alert-info">
            <label>Vehiculo Agregado!</label>
        </div>
   @endif
   @if(Session::get('Conductor_Registrado'))
        <div class="alert alert-info">
            <label>Conductor Agregado!</label>
        </div>
   @endif
    <!-- FIN REGISTRO EXITOSO -->
   @if(Session::get('Propietario_Registrado'))
        <div class="alert alert-info">
            <label>Propietario Agregado!</label>
        </div>
   @endif
   @if(Session::get('Vehiculo_actualizado'))
        <div class="alert alert-success">
            <label>Empleado Actualizado!</label>
        </div>
    <!-- {{session('Vehiculo_actualizado')}}</div> -->
   @endif
    <div class="container">
    <!-- @yield('create') -->
    @yield('content')
    
</div>
   
</body>
</html>