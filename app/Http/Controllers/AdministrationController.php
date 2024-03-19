<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PlantaFamilia;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function index()
    {
        $plantaFamilias = PlantaFamilia::paginate();
        
        return view('administration.index', compact('plantaFamilias'))
            ->with('i', (request()->input('page', 1) - 1) * $plantaFamilias->perPage());
    }

    public function create()
    {
        $plantaFamilia = new PlantaFamilia();
        return view('administration.create', compact('plantaFamilia'));
    }

    public function edit($id)
    {
        $plantaFamilia = PlantaFamilia::find($id);

        return view('administration.edit', compact('plantaFamilia'));
    }

    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate(PlantaFamilia::$rules);

        // Manejar el archivo de imagen
        if ($request->hasFile('image')) {
            // Generar un nombre único para el archivo de imagen
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();

            // Guardar el archivo en la carpeta storage/app/public
            $request->image->storeAs('public', $imageName);

            // Obtener la URL correspondiente al archivo guardado
            $imageUrl = asset('storage/' . $imageName);
        } else {
            // Si no se proporciona ninguna imagen, establecer la URL a nulo
            $imageUrl = null;
        }

        // Crear una nueva instancia de PlantaFamilia con los datos del formulario
        $plantaFamilia = new PlantaFamilia();
        $plantaFamilia->fill($request->all());

        // Asignar la URL de la imagen
        $plantaFamilia->image = $imageUrl;

        // Guardar el modelo en la base de datos
        $plantaFamilia->save();

        // Redireccionar a la página de índice con un mensaje de éxito
        return redirect()->route('admin.index')->with('success', 'PlantaFamilia created successfully.');
    }

    public function update(Request $request, PlantaFamilia $plantaFamilia)
    {
        request()->validate(PlantaFamilia::$rules);

        $plantaFamilia->update($request->all());

        return redirect()->route('administration.index')
            ->with('success', 'PlantaFamilia updated successfully');
    }

    public function destroy($id)
    {
        $plantaFamilia = PlantaFamilia::find($id)->delete();

        return redirect()->route('administration.index')
            ->with('success', 'PlantaFamilia deleted successfully');
    }
}
