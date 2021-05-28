<?php

use App\Http\Controllers\Habilidades;
use App\Http\Controllers\Personas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Tipos de Rutas:

//GET       (solicitar informacion)
//POST      (enviar o crear informacion)
//PUT       (enviar o actualizar informacion)
//DELETE    (eliminar informacion)

Route::get('/',function(){ 
    return "HOLA desde rutas";
});

Route::get('/main',function(){
    return view('templates.main');
});

//Sintaxis para definir rutas
//Route::tipo('ruta-url',[Controlador::class,'metodo'])->name('nombre.ruta);

//Devuelve el listado de personas
Route::get('/personas',[Personas::class,'index'])->name('personas.index');

Route::get('/personas/crear',[Personas::class,'create'])->name('personas.create');

Route::get('/personas/{persona}/edit',[Personas::class,'edit'])->name('personas.edit');

Route::get('/personas/show/{persona}',[Personas::class,'show'])->name('personas.show');

Route::post('/personas',[Personas::class,'store'])->name('personas.store');

Route::put('/personas/{persona}',[Personas::class,'update'])->name('personas.update');

Route::delete('/personas/{persona}',[Personas::class,'destroy'])->name('personas.destroy');

Route::get('/personas/{persona}/desactivar',[Personas::class,'desactivar'])->name('personas.desactivar');
Route::get('/personas/{persona}/desactivar',[Personas::class,'desactivar'])->name('personas.desactivar');

//Rutas para habilidades
Route::get('/habilidades',[Habilidades::class,'index'])->name('habilidades.index');
Route::get('/habilidades/create',[Habilidades::class,'create'])->name('habilidades.create');
Route::post('/habilidades',[Habilidades::class,'store'])->name('habilidades.store');
Route::get('/habilidades/{habilidad}',[Habilidades::class,'show'])->name('habilidades.show');
Route::get('/habilidades/edit',[Habilidades::class,'edit'])->name('habilidades.edit');
Route::put('/habilidades/{habilidad}',[Habilidades::class,'update'])->name('habilidades.update');
