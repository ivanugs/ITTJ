<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PlantaFamilia;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRegisterRequest;

class AdministrationController extends Controller
{
    public function index(){
        $plantaFamilias = PlantaFamilia::paginate();
        return view('administration.index', compact('plantaFamilias'))
            ->with('i', (request()->input('page', 1) - 1) * $plantaFamilias->perPage());
    }

    ///MOSTRAR VISTA de la pagina de create
    public function create(){
        $plantaFamilias = new PlantaFamilia();
        return view('administration.create', compact('plantaFamilias'));
    }

    //MOSTRAR VISTA de la pagina de edicion
    public function edit($id){
        $plantaFamilias = PlantaFamilia::find($id);
        
        return view('administration.edit', compact('plantaFamilias'));
    }

    //METODO para guardar los datos al crear un nuevo registro
    public function store(StoreRegisterRequest $request){
        $request->validate(PlantaFamilia::$rules);  // Validar la solicitud
        $image =  $request->file('image');
        if ($request->hasFile('image')) {  // Manejar el archivo de imagen
            $imageName = time() . '_' . $image->getClientOriginalName();  // Generar un nombre único para el archivo de imagen
            $image->storeAs('public', $imageName); // Guardar el archivo en la carpeta storage/app/public
        } else {$imageName = null;}
        $plantaFamilias = new PlantaFamilia(); // Crear una nueva instancia de PlantaFamilia con los datos del formulario
        $plantaFamilias->fill($request->all());  // asignar los demás campos del modelo
        $plantaFamilias->image = $imageName; // Asignar el nuevo nombre a la imagen
        $plantaFamilias->save();
        return redirect()->route('admin.index')->with('success', 'Entrada creada exitosamente.');
    }

    //METODO para actualizar registros de plantas o familia
    public function update(StoreRegisterRequest $request, PlantaFamilia $plantaFamilias){
        $request->validate(PlantaFamilia::$rules);  // Validar la solicitud
        $currentImage = $plantaFamilias->image;  // Obtener la imagen actual del modelo
        $path = Storage::path('\public/'.$currentImage);
        if ($request->hasFile('image')) {  // Manejar la nueva imagen
            $image = $request->file('image');  
            $imageName = time() . '_' . $image->getClientOriginalName(); // Generar un nombre único para el archivo de imagen
            $image->storeAs('public', $imageName);  // Guardar el archivo en la carpeta storage/app/public
            if ($currentImage) {unlink($path);} // Eliminar la imagen actual si existe
        } else { $imageName = $currentImage;}
        $plantaFamilias->fill($request->all()); // Actualizar los demás campos del modelo
        $plantaFamilias->image = $imageName; // Asignar el nuevo nombre a la imagen actualizada
        $plantaFamilias->save();
        return redirect()->route('admin.index')->with('success', 'Registro actualizado exitosamente.');
    }

    //METODO para eliminar registros de plantas o familia
    public function destroy($id){
        $plantaFamilias = PlantaFamilia::find($id)->delete();
        return redirect()->route('admin.index')
            ->with('success', 'Registro eliminado exitosamente.');
    }

    //MOSTRAR VISTA de detalle de los registros de plantas o familias
    public function show($id){
        $plantaFamilias = PlantaFamilia::find($id);
        return view('administration.show', compact('plantaFamilias'));
    }
}
