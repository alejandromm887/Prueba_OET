<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Vehiculo;
use App\Models\Propietario;
use App\Models\Conductor;

class vehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view ('vehiculos.index')->with('vehiculos', $vehiculos);
    }

    public function create()
    {
        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        return view('vehiculos.create', compact('propietarios','conductores'));
        return view('vehiculos.edit', compact('propietarios','conductores'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Vehiculo::create($input);
        return redirect('vehiculos')->with('Empleado_agregado', 'Empleado agregado!');  
    }

    public function show($id)
    {
        $vehiculos = Vehiculo::find($id);
        return view('vehiculos.show')->with('vehiculos', $vehiculos);
    }

    public function edit($id)
    {
        $vehiculos = Vehiculo::find($id);
        return view('vehiculos.edit')->with('vehiculos', $vehiculos);
    }

    public function update(Request $request, $id)
    {
        $vehiculos = Vehiculo::find($id);
        $input = $request->all();
        $vehiculos->update($input);
        return redirect('vehiculos')->with('Empleado_actualizado', 'Empleado actualizado!');  
    }
    public function destroy($id)
    {
        Vehiculo::destroy($id);
        return redirect('vehiculos')->with('Empleado_eliminado', 'Empleado eliminado!');  
    }

}
