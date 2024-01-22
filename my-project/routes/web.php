<?php

use App\Http\Controllers\InstitutControlador;
use App\Http\Controllers\ProfeControlador;
use App\Http\Controllers\SignController;
use App\Http\Controllers\UsuariControlador;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [InstitutControlador::class, 'login'])->middleware('email')->name('comprovaCorreu.index');

Route::get('/error', function() {
    return "Error d'accés";
})->name('errorAcces.index');

//
Route::get('/hurra', function() {
    return "<h1>Usuari creat!</h1><br><a href='signin'>Iniciar sessió</a>";
})->name('totBe.index');    


Route::get('/signin',  [InstitutControlador::class, 'signin']);

Route::get('/crearUsuari', function(){
    return view('crearUsuari');
});

Route::get('/professor', function(){
    return view('professor');
});

Route::controller(UsuariControlador::class)->group(function() {
    Route::get('/crearUsuari', 'mostrarCrearUsuari');
    Route::post('/crearUsuari', 'crearUsuari')-> name('crearUsuari');
    Route::post('/signin', 'login');
});

Route::controller(ProfeControlador::class)->group(function() {
    Route::get('/prof', 'index') -> name('prof.index');
    Route::get('/prof/{id}', 'edit') -> name('prof.edit');
    Route::get('/prof/crear', 'crear') -> name('prof.crear');
    Route::post('/prof', 'guardar') -> name('prof.guardar');
    Route::put('/prof/{id}', 'modificar') -> name('prof.modificar');
    Route::delete('/prof/{id}', 'borrar') -> name('prof.borrar');
});


// Route::post('/login', function() {
//     $email = 'arnau@iticbcn.cat';
//     return view('mostrar.grans')->with('variable', 'hola');
// })->name ('login');






