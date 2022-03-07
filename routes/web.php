<?php

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

##Route::get('/', function () {
  ##  return view('welcome');

    
##});

##Route::get('/', function () {
##    return view('notas');
##});


Route::get('notas/actualizar', function () {
    return 'Aquí será la vista pra actualizar una nota';
});

/*Route::get('api/notas', function () {
    return {
        'Notas' => [
            'Nombre',
            'Fechas',
            'Autor',
        ]
    }
});
¨*/

Route::get('notas/{id}/editar', function ($id) {
    $nota=DB::table('notas')
    ->where('id', $id)
    ->first();

    return 'Aquí se van a editar las notas: ' .$id;
})->name('notas.edit'); ##;->where('id', '[0-9]+');  Se usa para una ruta especifica

Route::get('agregar', function () {
    return view('agregar');
})->name('nuevanota');

Route::get('editar', function () {
    return view('editar');
});


##
Route::get('/', function(){
    $notas= DB::table('notas')->get();


    return view('notas', ['notas'=> $notas]);
})->name('listar');

