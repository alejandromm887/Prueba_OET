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
        $placas = Vehiculo::all();
        return view('vehiculos.create', compact('propietarios','conductores','placas'));
        // return view('vehiculos.edit', compact('propietarios','conductores','placas'));
    }

    public function store(Request $request)
    {
        // dd ($request->input('color'));
        $vehi = $request->input('color');
        $prop = $request->input('numerocedula');
        $cond = $request->input('numero_cedula');
        
        

        if(!is_null($vehi) and is_null($prop) and is_null($cond)){
            $input = $request->all();
            Vehiculo::create($input);
            return redirect('vehiculos')->with('Vehiculo_Registrado', 'Vehiculo Registrado!');
        }else if(is_null($vehi) and !is_null($prop) and is_null($cond)){
            $input = $request->all();
            Propietario::create($input);
            return redirect('vehiculos')->with('Conductor_Registrado', 'Conductor Registrado!');
        }else
            $input = $request->all();
            Conductor::create($input);
            return redirect('vehiculos')->with('Propietario_Registrado', 'Propietario Registrado!');
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
