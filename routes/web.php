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
    Route::get('/admin', 'index')->name('admin.index');
    Route::get('/admin/create', 'create')->name('admin.create');
    Route::get('/admin/{id}/edit', 'edit')->name('admin.edit');
    Route::get('/admin/{id}', 'show')->name('admin.show');
});

Route::controller(PlantaFamiliaController::class)->group(function(){
    Route::get('/planta-familias', 'index')->name('planta-familias.index');
    Route::get('/planta-familias/{id}', 'show')->name('planta-familias.show');
});

Route::post('/admin', 'App\Http\Controllers\AdministrationController@store')->name('admin.store');
Route::put('/admin/{plantaFamilia}', 'App\Http\Controllers\AdministrationController@update')->name('admin.update');
Route::delete('/admin/{id}', 'App\Http\Controllers\AdministrationController@destroy')->name('admin.destroy');
