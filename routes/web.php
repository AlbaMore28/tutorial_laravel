<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);
/*En laravel 7 se ponia asi:
    Route::get('/', 'HomeController');
*/

/* Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('cursos.index'); */
    /*En laravel 7 se ponia asi:
        Route::get('cursos', 'CursoController@index');
    */
    /* Route::get('cursos/create', 'create')->name('cursos.create');

    Route::post('cursos', 'store')->name('cursos.store');

    Route::get('cursos/{curso}', 'show')->name('cursos.show');

    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');

    Route::put('cursos/{curso}', 'update')->name('cursos.update');

    Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
}); */

Route::resource('cursos', CursoController::class);
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

/*Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
        return "Bienvenido al curso $curso, de la categoría $categoria ";
    }
    else{
        return "Bienvenido al curso: $curso";
    }
});*/