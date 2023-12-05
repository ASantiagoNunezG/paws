<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TipoBoletaController;
use App\Http\Controllers\UsuariosController;
use App\Models\Usuarios;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/** Rutas para el usuario */
Route::resource('administrador/proveedor', ProveedorController::class);


//Route::get('/administrador/categoria', CategoriaController::class);

Route::get('/cabeza',function(){
    return view('head');
});
Route::get('administrador/inicio',function(){
    return view('administrador.inicio');
})->name('inicio');


/*Rutas para administrar mascotas*/
//Route::resource('/administrador/mascota', MascotaController::class);
Route::get('administrador/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');


//Haciendo operaciones con mascota
Route::get('administrador/mascota', [MascotaController::class , 'index'])->name('mascota.ver');
Route::get('administrador/mascota/registrar', [MascotaController::class, 'registrar'])->name('mascota.registrar');
Route::post('administrador/mascota/crear', [MascotaController::class, 'crear'])->name('mascota.crear');
Route::delete('administrador/mascota/{id}',[MascotaController::class, 'destroy'])->name('mascota.destroy');
Route::get('administrador/mascota/{id}', [MascotaController::class,'edit'])->name('mascota.edit');
Route::put('administrador/mascota/{id}', [MascotaController::class,'update'])->name('mascota.update');
Route::get('administrador/usuarios', function(){
    return view('usuario.usuarios');
})->name('usuarios');



//Haciendo lo de productos con resource
Route::resource('administrador/productos', ProductosController::class);

//Rutas de prueba para todo lo relacionado con compras
//Route::get('tipoboleta',TipoBoletaController::class, 'show')->name('tipoboleta');


Route::resource('usuarios', UsuariosController::class);
