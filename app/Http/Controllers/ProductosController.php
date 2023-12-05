<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Productos;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    public function index(){
        $productos = Productos::orderBy('nombre')->paginate(5);
        return  view('administrador.productos.index', compact('productos'));
    }
    public function create(){
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('administrador.productos.create', compact('categorias'), compact('proveedores'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'nombre'=> 'required',
            'precio'=>'required',
            'cantidad'=>'required',
            'id_categoria'=>'required',
            'marca'=> 'required',
            'id_proveedor'=>'required'
        ]);
        Productos::create($request->all());        
        return redirect()->route('productos.index')->with('success','Producto creado satisfactoriamente');
    }
    public function show(){
        return 'show??';
    }
    public function edit($id){
        $productos = Productos::find($id);
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('administrador.productos.edit',compact('productos', 'categorias', 'proveedores'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'nombre'=> 'required',
            'precio'=>'required',
            'cantidad'=>'required',
            'id_categoria'=>'required',
            'marca'=> 'required',
            'id_proveedor'=>'required'
        ]);
        Productos::find($id)->update($request -> all());
        return redirect()->route('productos.index')->with('success','Producto actualizado satisfactoriamente');
    }
    public function destroy($id){
        Productos::find($id)->delete();
        return redirect()->route('productos.index')->with('success','Producto eliminado');
    }
}
