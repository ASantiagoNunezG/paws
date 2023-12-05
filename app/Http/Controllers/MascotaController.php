<?php

namespace App\Http\Controllers;

use App\Models\EstadoMascota;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class MascotaController extends Controller
{
    //
    public function index()
    {
        $mascota = Mascota::all();
        return view('administrador.mascota',compact('mascota'));
    }
    public function registrar(){
        $mascota = Mascota::all();
        $estado = EstadoMascota::all();
        return view('administrador.mascota_create', compact('mascota','estado'));
    }

    public function crear(Request $request){
        $mascota = new Mascota();
    
        $mascota->nombre = $request->nombre;
        $mascota->tamano = $request->tamano;
        $mascota->edad = $request->edad;
        $mascota->sexo = $request->sexo;
        $mascota->tipo = $request->tipo;
        $mascota->id_usuario = $request->id_usuario;
        $mascota->id_estado_mas = $request->id_estado_mas;

        $mascota->save();
        return redirect()->route('mascota.ver');

    }

    public function destroy($id){
        $mascota = Mascota::find($id);

        $mascota->delete();
        return redirect()->route('mascota.ver');
    }
    public function edit($id){
        $mascota = Mascota::find($id);
        $estado = EstadoMascota::all();
        return view('administrador.mascota_edit',compact('mascota','estado'));
    }
    public function update(Request $request, $id){
        $mascota = Mascota::find($id);
        
        $mascota->nombre = $request->nombre;
        $mascota->tamano = $request->tamano;
        $mascota->edad = $request->edad;
        $mascota->sexo = $request->sexo;
        $mascota->tipo = $request->tipo;
        $mascota->id_usuario = $request->id_usuario;
        $mascota->id_estado_mas = $request->id_estado_mas;

        $mascota->save();
        return redirect()->route('mascota.ver');
    }
    
}
