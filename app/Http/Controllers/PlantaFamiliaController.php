<?php

namespace App\Http\Controllers;

use App\Models\PlantaFamilia;
use Illuminate\Http\Request;

/**
 * Class PlantaFamiliaController
 * @package App\Http\Controllers
 */
class PlantaFamiliaController extends Controller
{
    public function index()
    {
        $plantaFamilias = PlantaFamilia::paginate();

        return view('planta-familia.index', compact('plantaFamilias'))
            ->with('i', (request()->input('page', 1) - 1) * $plantaFamilias->perPage());
    }

    public function show($id)
    {
        $plantaFamilias = PlantaFamilia::find($id);

        return view('planta-familia.show', compact('plantaFamilias'));
    }
}
