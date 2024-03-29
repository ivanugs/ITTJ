<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantaFamiliaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministrationController;
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
});

// Estas rutas son las que estan visibles al usuario
Route::controller(PlantaFamiliaController::class)->group(function(){
    Route::get('/planta-familias', 'index')->name('planta-familias.index');
    Route::get('/planta-familias/{id}', 'show')->name('planta-familias.show');
});

Route::controller(AboutController::class)->group(function(){
    Route::get('/about/resumen', 'summary')->name('about.summary');
    Route::get('/about/antecedentes', 'background')->name('about.background');
    Route::get('/about/importancia', 'importance')->name('about.importance');
    Route::get('/about/agradecimientos', 'thanks')->name('about.thanks');
    Route::get('/about/equipo', 'team')->name('about.team');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
