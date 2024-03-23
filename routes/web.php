<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantaFamiliaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministrationController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::controller(AdministrationController::class)->group(function(){
    Route::get('/admin', 'index')->name('admin.index'); //home de administracion
    Route::get('/admin/create', 'create')->name('admin.create'); //crear nueva planta o familia
    Route::get('/admin/{id}/edit', 'edit')->name('admin.edit'); //editar planta o familia
    Route::get('/admin/{id}', 'show')->name('admin.show'); //mostrar los registros de plantas y familias
    Route::post('/admin', 'store')->name('admin.store'); //guardar la imagen
    Route::put('/admin/{plantaFamilias}', 'update')->name('admin.update'); //actualizar
    Route::delete('/admin/{id}', 'destroy')->name('admin.destroy'); //eliminar un registro de planta o familia
});

Route::controller(PlantaFamiliaController::class)->group(function(){
    Route::get('/planta-familias', 'index')->name('planta-familias.index');
    Route::get('/planta-familias/{id}', 'show')->name('planta-familias.show');
});




