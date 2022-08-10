<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Vehiculo;
use App\Models\Propietario;
use App\Models\Conductor;
use Illuminate\Support\Facades\DB;


class vehiculoController extends Controller
{
    public function index()
    {

        $consultas = DB::table('vehiculo')
        ->join('conductor', 'conductor.vehiculo', '=', 'vehiculo.placa')
        ->join('propietario', 'propietario.vehiculo', '=', 'vehiculo.placa')
        ->select('vehiculo.placa', 'vehiculo.marca', 'conductor.primer_nombre as conductor', 'propietario.primer_nombre  as propietario')
        ->get();

        return view ('vehiculos.index')->with('consultas', $consultas);

    }

    public function create()
    {
        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        $placas = Vehiculo::all();
        return view('vehiculos.create', compact('propietarios','conductores','placas'));
    }

    public function store(Request $request)
    {
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

    public function show()
    {
        $vehiculos = Vehiculo::all();
        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        return view('vehiculos.show', compact('vehiculos','propietarios','conductores'));
        
    }

}
