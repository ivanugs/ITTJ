<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantaFamiliaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', HomeController::class)->name('home');

Auth::routes();

// agrege esta ruta middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::controller(AdministrationController::class)->group(function(){
        Route::get('/admin', 'index')->name('admin.index');
        Route::get('/admin/create', 'create')->name('admin.create');
        Route::get('/admin/{id}/edit', 'edit')->name('admin.edit');
        Route::get('/admin/{id}', 'show')->name('admin.show');
        Route::post('/admin', 'store')->name('admin.store');
        Route::put('/admin/{plantaFamilias}', 'update')->name('admin.update');
        Route::delete('/admin/{id}', 'destroy')->name('admin.destroy');
    });
    // Rutas para administración de usuarios
    Route::controller(UsersController::class)->group(function(){
        Route::get('/crear-usuario', 'index')->name('usuarios.index');
        Route::post('/registrar-usuario', 'store')->name('usuarios.store');
    });

});

// Estas rutas son las que estan visibles al usuario
Route::controller(PlantaFamiliaController::class)->group(function(){
    Route::get('/plantas', 'index')->name('plantas.index');
    Route::get('/plantas/{id}', 'show')->name('plantas.show');
    Route::get('/plantas/index/{letra}', 'indexPorLetra')->name('plantas.letra');
    Route::get('/familias', 'families')->name('familias.index');
    Route::get('/familias/{id}/{scientific_name}/especies', 'showFamilies')->name('familias.show');
});

Route::post('/familias/search',[PlantaFamiliaController::class, 'searchFamilies']);

Route::post('/plantas/search',[PlantaFamiliaController::class, 'searchSpecies']);

Route::controller(AboutController::class)->group(function(){
    Route::get('/about/resumen', 'summary')->name('about.summary');
    Route::get('/about/antecedentes', 'background')->name('about.background');
    Route::get('/about/importancia', 'importance')->name('about.importance');
    Route::get('/about/agradecimientos', 'thanks')->name('about.thanks');
    Route::get('/about/equipo', 'team')->name('about.team');
});
