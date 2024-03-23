<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PlantaFamilia;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdministrationController extends Controller
{
    public function index()
    {
        $plantaFamilias = PlantaFamilia::paginate();
        
        return view('administration.index', compact('plantaFamilias'))
            ->with('i', (request()->input('page', 1) - 1) * $plantaFamilias->perPage());
    }

    ///Metodo para retornar la pagina de create
    public function create()
    {
        $plantaFamilias = new PlantaFamilia();
        return view('administration.create', compact('plantaFamilias'));
    }

    //Metodo para retornar la pagina de edicion
    public function edit($id)
    {
        $plantaFamilias = PlantaFamilia::find($id);

        return view('administration.edit', compact('plantaFamilias'));
    }

    //Metodo para guardar las imagenes
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate(PlantaFamilia::$rules);

        $image =  $request->file('image');;

        // Manejar el archivo de imagen
        if ($request->hasFile('image')) {
            // Generar un nombre único para el archivo de imagen
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Guardar el archivo en la carpeta storage/app/public
            $image->storeAs('public', $imageName);
        } else {
            // Si no se proporciona ninguna imagen, establecer la URL a nulo
            $imageName = null;
        }

        // Crear una nueva instancia de PlantaFamilia con los datos del formulario
        $plantaFamilias = new PlantaFamilia();
        $plantaFamilias->fill($request->all());

        // Asignar la URL de la imagen
        $plantaFamilias->image = $imageName;

        // Guardar el modelo en la base de datos
        $plantaFamilias->save();

        // Redireccionar a la página de índice con un mensaje de éxito
       return redirect()->route('admin.index')->with('success', 'Entrada creada exitosamente.');
    }

    public function update(Request $request, PlantaFamilia $plantaFamilias)
    {
        // Validar la solicitud
        $request->validate(PlantaFamilia::$rules);

        // Obtener la imagen actual del modelo
        $currentImage = $plantaFamilias->image;
        $path = Storage::path('\public/'.$currentImage);

        // Manejar la nueva imagen
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // Generar un nombre único para el archivo de imagen
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Guardar el archivo en la carpeta storage/app/public
            $image->storeAs('public', $imageName);
            // Eliminar la imagen actual si existe
            unlink($path);
        } else {
            // Si no se proporciona ninguna imagen nueva, mantener la imagen actual
            $imageName = $currentImage;
        }

        // Actualizar los demás campos del modelo
        $plantaFamilias->fill($request->all());
        // Asignar la URL de la imagen actualizada
        $plantaFamilias->image = $imageName;
        // Guardar el modelo en la base de datos
        $plantaFamilias->save();

        // Redireccionar a la página de índice con un mensaje de éxito
        return redirect()->route('admin.index')->with('success', 'Registro actualizado exitosamente.');
    }


    //Metodo para eliminar registros de plantas o familia
    public function destroy($id)
    {
        $plantaFamilias = PlantaFamilia::find($id)->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Registro eliminado exitosamente.');
    }

    //Metodo para mostrar la informacion de los registros de plantas o familias
    public function show($id)
    {
        $plantaFamilias = PlantaFamilia::find($id);

        return view('administration.show', compact('plantaFamilias'));
    }
}
