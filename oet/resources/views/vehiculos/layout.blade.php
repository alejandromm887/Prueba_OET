<!DOCTYPE html>
<html>
<head>
    <title>Vehiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('js/vehiculos.js') }}"></script>
</head>
<body>
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

   @if(Session::get('Propietario_Registrado'))
        <div class="alert alert-info">
            <label>Propietario Agregado!</label>
        </div>
   @endif
    <!-- FIN REGISTRO EXITOSO -->
    <div class="container">
    @yield('content')
    
</div>
   
</body>
</html>